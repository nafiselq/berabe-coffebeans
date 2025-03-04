<script setup>
import Products from './Products.vue'
import { defineProps } from 'vue';

const props = defineProps({
    products: Array
});
</script>

<template>
    <div class="md:container md:mx-auto flex flex-col justify-center items-between md:p-0 p-4 md:mt-0 mt-[20px]">
        <h1 class="text-center md:text-[54px] text-[30px] text-primary font-bold">Enjoy our products</h1>
        <p class="text-center text-grey text-[20px]">Explore our selection of coffee bean products</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:mt-[50px] mt-[30px] w-full max-w-7xl px-4">
            <Products v-for="product in products" :key="product.id" :product="product" />
        </div>
    </div>
</template>
