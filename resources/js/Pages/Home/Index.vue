<script setup>
import PublicLayout from '@/Layouts/PublicLayout.vue';
import HeroSection from '@/Components/HeroSection.vue';
import DiscoverSection from '@/Components/DiscoverSection.vue';
import OurProductSection from '@/Components/OurProductSection.vue';
import DifferentSection from '@/Components/DifferentSection.vue';
import AmazingSection from '@/Components/AmazingSection.vue';
import FeedbackSection from '@/Components/FeedbackSection.vue';
import FooterSection from '@/Components/FooterSection.vue';
import { Head } from '@inertiajs/vue3';
import { defineProps } from 'vue';

const props = defineProps({
    products: Object,
    feedbacks: Object,
});
</script>

<template>
    <Head>
        <title>Home</title>
        <meta name="description" content="Enjoy premium coffee from Berabe Coffee. 100% authentic Indonesian coffee, processed with the highest standards. Order now and experience perfection in every sip!">
        <meta name="robots" content="index, follow">
        <meta property="og:title" content="home">
        <meta property="og:description" content="Enjoy premium coffee from Berabe Coffee. 100% authentic Indonesian coffee, processed with the highest standards. Order now and experience perfection in every sip!">
        <meta property="og:type" content="website">
        <meta property="og:image" content="/your-image.jpg">
        <meta property="og:url" content="https://karyamudacontinental.com">
    </Head>
    <PublicLayout>
       <HeroSection />
       <DiscoverSection />
       <OurProductSection :products="products" />
       <DifferentSection />
       <AmazingSection />
       <FeedbackSection :feedbacks="feedbacks" />
       <FooterSection />
    </PublicLayout>
</template>
