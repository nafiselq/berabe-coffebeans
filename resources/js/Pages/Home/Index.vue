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
</script>

<template>
    <Head title="Home" />
    <PublicLayout>
       <HeroSection />
       <DiscoverSection />
       <OurProductSection />
       <DifferentSection />
       <AmazingSection />
       <FeedbackSection />
       <FooterSection />
    </PublicLayout>
</template>