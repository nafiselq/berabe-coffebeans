<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    product: Object
});
</script>


<template>
    <div class="md:w-[300px] md:mt-0 mt-[20px] bg-cream rounded-lg shadow-lg overflow-hidden">
        <!-- Bagian Gambar -->
        <img :src="`/storage/${product.photo}`" alt="Cappuccino" class="w-full h-60 object-cover">

        <!-- Bagian Informasi Produk -->
        <div class="p-5 text-center">
            <h3 class="text-lg font-bold text-brown">{{ product.title }}</h3>
            <p class="text-gray-700">{{ product.subtitle }}</p>
            <!-- <p class="text-lg font-bold text-brown mt-2">$8.50</p> -->

            <!-- Tombol Order -->
            <!-- <button
                class="mt-4 bg-yellow-400 text-brown font-semibold py-2 px-6 rounded-full shadow-md hover:bg-yellow-500 transition">
                Order Now
            </button> -->
        </div>
    </div>
</template>
