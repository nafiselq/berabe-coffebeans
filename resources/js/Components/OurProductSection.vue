<script setup>
import Products from './Products.vue';
</script>

<template>
    <div class="container mx-auto">
        <h1 class="text-center text-[54px] text-primary font-bold">Enjoy our recommended products</h1>
        <p class="text-center text-grey text-[20px]">Explore all flavours of coffee with us. There is always a new
            item worth experiencing</p>
        <div class="md:flex justify-between mt-12">
            <Products />
            <Products />
            <Products />
            <Products />
        </div>
    </div>
</template>