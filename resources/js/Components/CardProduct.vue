<script setup>
import { defineProps } from 'vue';

const props = defineProps({
  title: String,
  subTitle: String,
  image: String
});
</script>

<template>
  <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white md:mt-[30px] mt-[30px]">
    <img class="w-[600px] h-48 object-cover" :src="`/storage/${image}`" alt="Card Image">
    <div class="p-4">
      <h2 class="text-xl font-semibold text-gray-900">{{ title }}</h2>
      <p class="text-gray-600">{{ subTitle }}</p>
    </div>
  </div>
</template>
