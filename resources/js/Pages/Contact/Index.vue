<script setup>
import PublicLayout from '@/Layouts/PublicLayout.vue';
import { Head } from '@inertiajs/vue3';
import FooterSection from '@/Components/FooterSection.vue';
</script>

<template>
    <Head title="Contact" />
    <PublicLayout>
        <section class="relative bg-[url('/img/coffee_image.png')] bg-no-repeat bg-cover bg-center h-[90px]">
            <div class="absolute inset-0 bg-black opacity-90"></div>
        </section>
        <section class="flex flex-col justify-start items-center md:mt-[120px] mt-[40px] md:p-0 p-4">
            <h1 class="md:text-[40px] md:w-[60%] text-center text-gray-600 md:mt-[50px] font-bold">Contact Us</h1>
            <p class="text-gray-600 text-center mt-2">We'd love to hear from you! Fill out the form below.</p>
            <div class="w-full max-w-screen-lg">
                <form action="#" method="POST" class="mt-6">
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium">Name</label>
                    <input type="text" class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" placeholder="Your Name" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium">Email</label>
                    <input type="email" class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" placeholder="Your Email" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium">Message</label>
                    <textarea class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200" rows="4" placeholder="Your Message" required></textarea>
                </div>

                <button type="submit" class="w-full bg-orange text-black font-medium py-3 rounded-lg hover:bg-blue-700 transition">
                    Send Message
                </button>
            </form>
            </div>
        </section>
        <FooterSection />
    </PublicLayout>
</template>