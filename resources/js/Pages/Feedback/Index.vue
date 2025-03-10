<script setup>
import PublicLayout from '@/Layouts/PublicLayout.vue';
import { Head, router } from '@inertiajs/vue3';
import FooterSection from '@/Components/FooterSection.vue';
import { ref } from 'vue';
import { showError, showSuccess } from '@/utils/swal';

const form = ref({
    name: '',
    comment: '',
    photo: '',
});

const handleFileChange = (event) => {
    form.value.photo = event.target.files[0];
};


const submit = () => {
    const formData = new FormData();
    formData.append('name', form.value.name);
    formData.append('comment', form.value.comment);
    formData.append('photo', form.value.photo);
    router.post('/feedback', formData, {
        onSuccess: () => {
            showSuccess("Successfully send feedback!");
            form.value.name = '';
            form.value.comment = '';
            form.value.photo = '';
        },
        onError: (errors) => {
            console.log("ini error s: ", errors);
            let errorMessage = errors.email ? errors.email[0] : "Something went wrong!";
            showError(errorMessage);
        }
    })
};


</script>

<template>
    <Head>
        <title>Feedback</title>
        <meta name="description" content="Enjoy premium coffee from Berabe Coffee. 100% authentic Indonesian coffee, processed with the highest standards. Order now and experience perfection in every sip!">
        <meta name="robots" content="index, follow">
        <meta property="og:title" content="Feedback">
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
            <!-- <h1 class="md:text-[40px] md:w-[60%] text-center text-gray-600 font-bold">Contact Us</h1> -->
            <p class="text-gray-600 text-center mt-2">We value your feedback! Please fill out the form below to share
                your thoughts with us.</p>
            <div class="w-full max-w-screen-lg">
                <form @submit.prevent="submit">
                    <div class="mb-4">
                        <label class="block">Name:</label>
                        <input v-model="form.name" type="text" class="w-full p-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label class="block">Comment:</label>
                        <textarea v-model="form.comment" type="text" class="w-full p-2 border rounded"
                            required></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block">Photo:</label>
                        <input type="file" @change="handleFileChange" class="w-full p-2 border rounded">
                    </div>
                    <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Submit</button>
                </form>
            </div>
        </section>
        <FooterSection />
    </PublicLayout>
</template>
