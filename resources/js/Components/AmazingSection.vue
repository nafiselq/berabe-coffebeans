<script setup>
import BaseButton from './BaseButton.vue';
</script>


<template>
    <section class="relative bg-[url('/img/bg-coffe.png')] bg-no-repeat bg-cover bg-center h-[574px] mt-[82px]">
        <div class="absolute inset-0 bg-primary opacity-[70%]"></div>
        <div class="overflow-hidden z-10 p-4 absolute
                md:top-[50%] md:w-[50%] w-[90%] top-[20%] md:left-[100px] left-[190px] transform -translate-x-1/2 -translate-y-1/2
                md:translate-x-0 md:left-21 md:right-auto">
            <h1 class="font-sans text-white md:text-[54px] text-[20px] font-bold md:w-[595px]">Get a chance to have an Amazing day</h1>
            <p class="font-sans text-white opacity-[80%] md:text-[20px] text-[15px] md:w-[409px]">We are giving you are one time opportunity to experience a better life with coffee.</p>
            <!-- <div class="mt-[22px]">
                <BaseButton label="Order Now" variant="primary" size="md" />
            </div> -->
        </div>
        <img class="absolute right-0 md:w-[30%] w-[100%] bottom-0" src="/img/right-coffe.png"/>
    </section>
</template>