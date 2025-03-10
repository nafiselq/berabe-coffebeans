<script setup>
import { defineProps, ref } from 'vue';
import { Dialog, DialogPanel, TransitionRoot } from '@headlessui/vue';

const props = defineProps({
    product: Object
});

const isOpen = ref(false);
const openModal = () => {
    isOpen.value = true;
};
const closeModal = () => {
    isOpen.value = false;
};
</script>


<template>
    <div @click="openModal"
        class="cursor-pointer md:w-[300px] md:mt-0 mt-[20px] bg-cream rounded-lg shadow-lg overflow-hidden">
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

        <!-- Modal Detail Produk -->
        <TransitionRoot appear :show="isOpen" as="template">
            <Dialog as="div" class="relative z-10" @close="closeModal">
                <div class="fixed inset-0 bg-black bg-opacity-50" />
                <div class="fixed inset-0 flex items-center justify-center p-4">
                    <DialogPanel class="w-full max-w-lg bg-white rounded-lg shadow-lg p-6">
                        <h2 class="text-xl font-bold text-brown">{{ product.title }}</h2>
                        <img :src="`/storage/${product.photo}`" alt="Product Image"
                            class="w-full h-60 object-cover mt-4">
                        <p class="text-gray-700 mt-2">{{ product.desc }}</p>
                        <p class="mt-[70px]">How to buy?
                            <span>
                                <a class="ml-[2px]" href="https://wa.me/6282117859909?text=Hi%20Berabe%20Coffee%20,%20I%E2%80%99m%20interested%20in%20purchasing%20a%20product%20from%20your%20store.%20Could%20you%20please%20provide%20me%20with%20the%20details%20on%20how%20to%20place%20an%20order?"
                                    style="display: inline-block; padding: 2px 12px; background-color: #25D366; color: #fff; text-decoration: none; font-weight: bold; border-radius: 5px;">
                                    📩 Chat via WhatsApp
                                </a>
                            </span>
                        </p>
                        <button @click="closeModal"
                            class="mt-4 px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Close</button>
                    </DialogPanel>
                </div>
            </Dialog>
        </TransitionRoot>
    </div>
</template>
