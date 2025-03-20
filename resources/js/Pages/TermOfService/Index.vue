<script setup>
import PublicLayout from '@/Layouts/PublicLayout.vue';
import { Head } from '@inertiajs/vue3';
import FooterSection from '@/Components/FooterSection.vue';
</script>

<template>

    <Head>
        <title>Term of Service</title>
        <meta name="description"
            content="Enjoy premium coffee from Berabe Coffee. 100% authentic Indonesian coffee, processed with the highest standards. Order now and experience perfection in every sip!">
        <meta name="robots" content="index, follow">
        <meta property="og:title" content="Products">
        <meta property="og:description"
            content="Enjoy premium coffee from Berabe Coffee. 100% authentic Indonesian coffee, processed with the highest standards. Order now and experience perfection in every sip!">
        <meta property="og:type" content="website">
        <meta property="og:image" content="/your-image.jpg">
        <meta property="og:url" content="https://karyamudacontinental.com">
    </Head>
    <PublicLayout>
        <!-- Hero Section -->
        <section class="relative bg-[url('/img/coffee_image.png')] bg-no-repeat bg-cover bg-center h-[90px]">
            <div class="absolute inset-0 bg-black bg-opacity-90"></div>
        </section>

        <!-- Products Section -->
        <section class="flex flex-col items-center">
            <h1
                class="text-center text-gray-600 font-bold md:text-[40px] text-[28px] mt-10 md:mt-[50px] w-[80%] md:w-[60%]">
                Terms Of Service
            </h1>

            <ul class="list-disc pl-6 space-y-2 text-gray-700 mt-[50px]">
                <li>For quotations, please contact us.</li>
                <li>Minimum Order 100 KG.</li>
                <li>Payment, Letter Of Credit.</li>
                <li>Incoterms, <span class="font-semibold">EXW, FOB</span>.</li>
                <li>Shipping can be via ship or plane, depending on request.</li>
                <li>For packaging request, please contact us.</li>
                <li>Purchases over 2 Tons must pay a <span class="font-semibold">30% down payment</span>.</li>
                <li>The above Terms and Conditions can be renegotiated, please contact us.</li>
            </ul>
        </section>

        <!-- Footer -->
        <FooterSection />
    </PublicLayout>
</template>
