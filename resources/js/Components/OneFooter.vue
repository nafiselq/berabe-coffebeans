<script setup>
    import BaseButton from './BaseButton.vue';
</script>

<template>
    <section
        class="relative bg-[url('/img/bg-coffe.png')] bg-no-repeat bg-cover bg-center h-[374px] flex flex-col justify-center items-center">
        <div class="absolute inset-0 bg-primary opacity-[70%]"></div>
        <div class="overflow-hidden z-10 flex flex-col items-center justify-center">
            <h1 class="text-white text-[54px] font-bold">Subscribe to get the Latest News</h1>
            <p class="text-[20px] text-white">Don’t miss out on our latest news, updates, tips and special offers</p>
            <div class="mt-[26px] flex flex-row">
                <input class="bg-white p-4 w-[642px]" type="text" placeholder="Enter your email">
                <BaseButton label="Subscribe" variant="primary" size="md" rounded="false" />
            </div>
        </div>
    </section>
</template>