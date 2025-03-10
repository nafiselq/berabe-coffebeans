<script setup>
import { Dialog, DialogPanel, TransitionRoot } from '@headlessui/vue';
import { defineProps, ref } from 'vue';

const props = defineProps({
  title: String,
  subTitle: String,
  desc: String,
  image: String
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
  <div @click="openModal" class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white md:mt-[30px] mt-[30px]">
    <img class="w-[600px] h-48 object-cover" :src="`/storage/${image}`" alt="Card Image">
    <div class="p-4">
      <h2 class="text-xl font-semibold text-gray-900">{{ title }}</h2>
      <p class="text-gray-600">{{ subTitle }}</p>
    </div>
  </div>


  <!-- Modal Detail Produk -->
  <TransitionRoot appear :show="isOpen" as="template">
    <Dialog as="div" class="relative z-10" @close="closeModal">
      <div class="fixed inset-0 bg-black bg-opacity-50" />
      <div class="fixed inset-0 flex items-center justify-center p-4">
        <DialogPanel class="w-full max-w-lg bg-white rounded-lg shadow-lg p-6">
          <h2 class="text-xl font-bold text-brown">{{ title }}</h2>
          <img :src="`/storage/${image}`" alt="Product Image" class="w-full h-60 object-cover mt-4">
          <p class="text-gray-700 mt-2">{{ desc }}</p>
          <p class="mt-[70px]">How to buy?
            <span>
              <a class="ml-[2px]"
                href="https://wa.me/6282117859909?text=Hi%20Berabe%20Coffee%20,%20I%E2%80%99m%20interested%20in%20purchasing%20a%20product%20from%20your%20store.%20Could%20you%20please%20provide%20me%20with%20the%20details%20on%20how%20to%20place%20an%20order?"
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
</template>
