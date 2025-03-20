<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';

import { defineProps } from 'vue';

const props = defineProps({
    feedbacks: Object,
});

const deleteFeedback = (id) => {
    if (confirm('Are you sure you want to delete this feedback?')) {
        router.delete(`/admin/feedback/${id}`);
    }
};

const fetchPage = (url) => {
    router.visit(url);
};

</script>

<template>
    <Head>
        <title>Feedbacks</title>
        <meta name="description" content="Enjoy premium coffee from Berabe Coffee. 100% authentic Indonesian coffee, processed with the highest standards. Order now and experience perfection in every sip!">
        <meta name="robots" content="index, follow">
        <meta property="og:title" content="Feedbacks">
        <meta property="og:description" content="Enjoy premium coffee from Berabe Coffee. 100% authentic Indonesian coffee, processed with the highest standards. Order now and experience perfection in every sip!">
        <meta property="og:type" content="website">
        <meta property="og:image" content="/your-image.jpg">
        <meta property="og:url" content="https://karyamudacontinental.com">
    </Head>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Feedbacks
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div>
                    <table class="table-auto w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border border-gray-300 px-4 py-2">Name</th>
                                <th class="border border-gray-300 px-4 py-2">Comment</th>
                                <th class="border border-gray-300 px-4 py-2">Photo</th>
                                <th class="border border-gray-300 px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="feedback in feedbacks.data" :key="feedback.id" class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">{{ feedback.name }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ feedback.comment }}</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <img v-if="feedback.photo" :src="`/storage/${feedback.photo}`"
                                        class="w-16 h-16 object-cover" />
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <button @click="editFeedback(feedback)"
                                        class="px-2 py-1 bg-yellow-500 text-white rounded">Edit</button>
                                    <button @click="deleteFeedback(feedback.id)"
                                        class="px-2 py-1 bg-red-500 text-white ml-4 rounded">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mt-4">
                        <button v-if="feedbacks.prev_page_url" @click="fetchPage(feedbacks.prev_page_url)"
                            class="px-4 py-2 bg-gray-500 text-white rounded mr-3">Previous</button>
                        <button v-if="feedbacks.next_page_url" @click="fetchPage(feedbacks.next_page_url)"
                            class="px-4 py-2 bg-gray-500 text-white rounded">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
