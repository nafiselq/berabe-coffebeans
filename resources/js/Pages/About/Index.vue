<script setup>
import FooterSection from '@/Components/FooterSection.vue';
import PublicLayout from '@/Layouts/PublicLayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="About Us" />
    <PublicLayout>
        <section class="relative bg-[url('/img/coffee_image.png')] bg-no-repeat bg-cover bg-center md:h-[500px] h-[595px]">
            <div class="absolute inset-0 bg-black opacity-80"></div>
            <!-- Text Content -->
            <div class="overflow-hidden z-10 p-4 absolute
                md:top-[55%] top-[50%] md:left-[29%] left-[130px] transform -translate-x-1/2 -translate-y-1/2
                md:translate-x-0 md:left-21 md:right-auto flex flex-col justify-center items-center">
                <h1 class="text-white text-xs md:text-7xl">Get to Know Insight</h1>
                <p class="text-white text-xl md:mt-[30px]">Who we are and what we do goes for beyond providing coffee solutions.</p>
                <p class="text-white text-sm md:mt-[5px]">Learn how we'll making a difference in the world around us</p>
            </div>
        </section>
        <section class="flex flex-col justify-start items-center">
            <h1 class="md:text-[40px] md:w-[60%] text-center text-gray-600 md:mt-[80px] font-bold">We accelerate transformation by unlocking the power of people and coffee</h1>
            <p class="md:text-[20px] md:w-[60%] text-center text-gray-600 md:mt-[30px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis tortor tortor, ac consectetur dui imperdiet a. Nunc ac nunc sit amet est porta elementum in et libero. Vestibulum molestie imperdiet tincidunt. Mauris sed enim et tellus semper semper. Morbi pretium orci non odio egestas, quis blandit libero suscipit. Fusce venenatis neque elit, nec sodales nisi tincidunt auctor. Duis vel consectetur elit.</p>
        </section>
        <FooterSection />
    </PublicLayout>
</template>