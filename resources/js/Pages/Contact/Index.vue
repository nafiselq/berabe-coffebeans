<script setup>
import PublicLayout from '@/Layouts/PublicLayout.vue';
import { Head, router } from '@inertiajs/vue3';
import FooterSection from '@/Components/FooterSection.vue';
import { ref } from 'vue';
import { showError, showSuccess } from '@/utils/swal';

const form = ref({
    name: '',
    email: '',
    message: ''
});

const errors = ref({}); // Menyimpan error dari server
const loading = ref(false);

const submit = () => {
    loading.value = true;
    errors.value = {}; // Reset error sebelum mengirim request

    router.post('/contact', form.value, {
        onSuccess: () => {
            showSuccess("Successfully sent feedback!");
            form.value.name = '';
            form.value.email = '';
            form.value.message = '';
            loading.value = false;
        },
        onError: (err) => {
            console.log("Error response: ", err);
            errors.value = err; // Simpan error yang diterima dari server
            showError(err.email ? err.email[0] : "Something went wrong!");
            loading.value = false;
        }
    });
};
</script>

<template>
    <Head>
        <title>Contact</title>
        <meta name="description" content="Enjoy premium coffee from Berabe Coffee. 100% authentic Indonesian coffee, processed with the highest standards. Order now and experience perfection in every sip!">
        <meta name="robots" content="index, follow">
        <meta property="og:title" content="Contact">
        <meta property="og:description" content="Enjoy premium coffee from Berabe Coffee. 100% authentic Indonesian coffee, processed with the highest standards. Order now and experience perfection in every sip!">
        <meta property="og:type" content="website">
        <meta property="og:image" content="/your-image.jpg">
        <meta property="og:url" content="https://karyamudacontinental.com">
    </Head>
    <PublicLayout>
        <section class="relative bg-[url('/img/coffee_image.png')] bg-no-repeat bg-cover bg-center h-[90px]">
            <div class="absolute inset-0 bg-black opacity-90"></div>
        </section>
        <section class="flex flex-col justify-start items-center md:mt-[50px] mt-[40px] md:p-0 p-4">
            <p class="text-gray-600 text-center mt-2">We'd love to hear from you! Fill out the form below.</p>
            <div class="w-full max-w-screen-lg">
                <form @submit.prevent="submit" class="space-y-4">
                    <div>
                        <label class="block text-gray-700">Name</label>
                        <input v-model="form.name" type="text" class="border p-2 w-full" required />
                        <div v-if="errors.name" class="text-red-500 text-sm">{{ errors.name[0] }}</div>
                    </div>

                    <div>
                        <label class="block text-gray-700">Email</label>
                        <input v-model="form.email" type="email" class="border p-2 w-full" required />
                        <div v-if="errors.email" class="text-red-500 text-sm">{{ errors.email[0] }}</div>
                    </div>

                    <div>
                        <label class="block text-gray-700">Message</label>
                        <textarea v-model="form.message" class="border p-2 w-full" required></textarea>
                        <div v-if="errors.message" class="text-red-500 text-sm">{{ errors.message[0] }}</div>
                    </div>

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 w-full" :disabled="loading">
                        <span v-if="loading">Sending...</span>
                        <span v-else>Send Message</span>
                    </button>
                </form>
            </div>
        </section>
        <FooterSection />
    </PublicLayout>
</template>