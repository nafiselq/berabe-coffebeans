<script setup>
import BaseButton from './BaseButton.vue';
</script>

<template>
     <section class="relative bg-[url('/img/coffee_image.png')] bg-no-repeat bg-cover bg-center md:h-screen md:h-screen h-[595px]">
            <div class="absolute inset-0 bg-gradient-to-r from-black/100 to-transparent"></div>
            <!-- Text Content -->
            <div class="overflow-hidden z-10 p-4 absolute
                md:top-[60%] top-[55%] left-[170px] transform -translate-x-1/2 -translate-y-1/2
                md:translate-x-0 md:left-21 md:right-auto">
                <p class="text-white text-lg md:text-xl">
                Make your day more enjoyable by drinking coffee from
                </p>
                <p class="md:w-[500px] w-[300px] md:text-[70px] text-[40px] text-white font-clicker">
                Authentic Indonesian Coffee Beans
                </p>
                <p class="md:w-[527px] text-white md:text-[20px] text-[12px]"
                >A cup of coffee in the morning with authentic Indonesian coffee beans can make your day better. Another cup in the afternoon completes your day.</p>
                <div class="mt-[20px]">
                    <BaseButton label="Order Now" variant="primary" size="md" />
                </div>
            </div>
        </section>
</template>
