<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';
import { ref } from 'vue';
import { QuillEditor } from '@vueup/vue-quill';
import '@vueup/vue-quill/dist/vue-quill.snow.css';
import { showError, showSuccess } from '@/utils/swal';

const props = defineProps({
    subscribers: Object,
});

const showModal = ref(false);
const emailTitle = ref('');
const emailContent = ref('');

const sendPromo = () => {
    router.post('/admin/promo/send', {
        title: emailTitle.value,
        content: emailContent.value,
    }, {
        preserveState: true,
        onSuccess: () => {
            showModal.value = false;
            emailTitle.value = '';
            emailContent.value = '';
            showSuccess("Promo email sent successfully!");
        },
        onError: (errors) => {
            console.error(errors);
            showError("Failed to send email.");
        }
    });
};

const createBlast = () => {
    showModal.value = true;
};

const deleteSubscriber = (id) => {
    if (confirm('Are you sure you want to delete thise email?')) {
        router.delete(`/admin/promo/${id}`);
    }
};

const fetchPage = (url) => {
    router.visit(url);
};
</script>

<template>

    <Head>
        <title>Promo</title>
        <meta name="description"
            content="Enjoy premium coffee from Berabe Coffee. 100% authentic Indonesian coffee, processed with the highest standards. Order now and experience perfection in every sip!">
        <meta name="robots" content="index, follow">
        <meta property="og:title" content="Promo">
        <meta property="og:description"
            content="Enjoy premium coffee from Berabe Coffee. 100% authentic Indonesian coffee, processed with the highest standards. Order now and experience perfection in every sip!">
        <meta property="og:type" content="website">
        <meta property="og:image" content="/your-image.jpg">
        <meta property="og:url" content="https://karyamudacontinental.com">
    </Head>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Promo
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div>
                    <button @click="createBlast" class="mb-4 px-4 py-2 bg-blue-500 text-white rounded">Blast
                        Promo</button>
                    <table class="table-auto w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border border-gray-300 px-4 py-2">Email</th>
                                <th class="border border-gray-300 px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="subscriber in subscribers.data" :key="subscriber.id" class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">{{ subscriber.email }}</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <button @click="deleteSubscriber(subscriber.id)"
                                        class="px-2 py-1 bg-red-500 text-white ml-4 rounded">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mt-4">
                        <button v-if="subscribers.prev_page_url" @click="fetchPage(subscribers.prev_page_url)"
                            class="px-4 py-2 bg-gray-500 text-white rounded mr-3">Previous</button>
                        <button v-if="subscribers.next_page_url" @click="fetchPage(subscribers.next_page_url)"
                            class="px-4 py-2 bg-gray-500 text-white rounded">Next</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div v-if="showModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <div class="bg-white p-6 rounded-lg w-1/2">
                <h3 class="text-lg font-semibold mb-4">Create Promo Email</h3>
                <label class="block mb-2">Title</label>
                <input v-model="emailTitle" class="w-full p-2 border rounded mb-4" placeholder="Enter title" />
                <label class="block mb-2">Content</label>
                <quill-editor v-model:content="emailContent" content-type="html" theme="snow" class="mb-4" />
                <div class="flex justify-end mt-5">
                    <button @click="showModal = false"
                        class="px-4 py-2 bg-gray-500 text-white rounded mr-2">Cancel</button>
                    <button @click="sendPromo" class="px-4 py-2 bg-blue-500 text-white rounded">Send</button>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
