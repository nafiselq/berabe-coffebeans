<script setup>
    import BaseButton from './BaseButton.vue';
</script>

<template>
    <section
        class="relative bg-[url('/img/bg-coffe.png')] bg-no-repeat bg-cover bg-center h-[374px] flex flex-col justify-center items-center">
        <div class="absolute inset-0 bg-primary opacity-[70%]"></div>
        <div class="overflow-hidden z-10 flex flex-col items-center justify-center">
            <h1 class="text-white md:text-[54px] font-bold">Subscribe to get the Latest News</h1>
            <p class="md:text-[20px] md:w-full w-[400px] text-center text-white">Don’t miss out on our latest news, updates, tips and special offers</p>
            <div class="md:mt-[26px] mt-[10px] flex flex-row">
                <input class="bg-white md:p-4 md:w-[642px]" type="text" placeholder="Enter your email">
                <BaseButton label="Subscribe" variant="primary" size="md" rounded="false" />
            </div>
        </div>
    </section>
</template>