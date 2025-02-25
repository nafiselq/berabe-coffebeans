<script setup>
import Products from './Products.vue';
</script>

<template>
    <div class="md:container md:mx-auto flex flex-col justify-center items-between md:p-0 p-4 md:mt-0 mt-[20px]">
        <h1 class="text-center md:text-[54px] text-[30px] text-primary font-bold">Enjoy our products</h1>
        <p class="text-center text-grey text-[20px]">Explore our selection of coffee bean products</p>
        <div class="md:flex md:flex-row flex-col justify-between mt-12">
            <Products />
            <Products />
            <Products />
            <Products />
        </div>
    </div>
</template>