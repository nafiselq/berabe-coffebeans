<script setup>
import FooterSection from '@/Components/FooterSection.vue';
import PublicLayout from '@/Layouts/PublicLayout.vue';
import { Head } from '@inertiajs/vue3';


const props = defineProps({
    'about': Object
});

console.log("ini about : ", props.about);

</script>

<template>

    <Head title="About Us" />
    <PublicLayout>
        <section
            class="relative bg-[url('/img/coffee_image.png')] bg-no-repeat bg-cover bg-center md:h-[500px] h-[595px]">
            <div class="absolute inset-0 bg-black opacity-80"></div>

            <!-- Text Content -->
            <div class="absolute inset-0 flex flex-col justify-center items-center text-center p-4">
                <h1 class="text-white text-[30px] md:text-7xl">Get to Know Insight</h1>
                <p class="text-white md:text-xl mt-[30px]">Who we are and what we do goes far beyond providing coffee
                    solutions.</p>
                <p class="text-white md:text-sm mt-[5px]">Learn how we're making a difference in the world around us</p>
            </div>
        </section>

        <section class="flex flex-col justify-start items-center md:p-0 p-4 md:mt-0 mt-[50px]">
            <h1 class="md:text-[40px] md:w-[60%] text-center text-gray-600 md:mt-[80px] font-bold">{{ props.about.title }}</h1>
            <p class="md:text-[20px] md:w-[60%] text-center text-gray-600 md:mt-[30px]">{{ props.about.content }}</p>
        </section>
        <FooterSection />
    </PublicLayout>
</template>
