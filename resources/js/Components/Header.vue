<template>
  <header class="absolute top-0 left-0 w-full z-50 bg-transparent">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <!-- Logo -->
      <div class="flex flex-col">
        <h1 class="text-white text-[20px]">PT. Karya Muda Continental</h1>
        <h1 class="text-white text-[35px] font-clicker">Berabe Coffee</h1>
      </div>

      <!-- Hamburger Menu (Mobile) -->
      <button @click="toggleMenu" class="block md:hidden text-black focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>

      <!-- Navigation -->
      <div class="hidden md:block md:rounded-full md:mr-24">
        <nav>
          <ul class="flex flex-col md:flex-row md:space-x-12 space-y-2 md:space-y-0">
            <li>
              <Link href="/" class="text-white text-lg">Home</Link>
            </li>
            <li>
              <Link href="/about-us" class="text-white text-lg">About Us</Link>
            </li>
            <li>
              <Link href="/products" class="text-white text-lg">Products</Link>
            </li>
            <li>
              <Link href="/contact" class="text-white text-lg">Contact Us</Link>
            </li>
          </ul>
        </nav>
      </div>

      <!-- Instagram Button -->
      <div class="hidden md:flex">
        <BaseButton label="Instagram" variant="primary" size="md" />
      </div>
    </div>

    <!-- Mobile Navigation -->
    <nav v-show="isMenuOpen" class="md:hidden absolute top-full left-0 w-full bg-white shadow-md">
      <ul class="flex flex-col space-y-2 p-4">
        <li><Link href="/" class="text-black text-lg">Home</Link></li>
        <li><Link href="/about-us" class="text-black text-lg">About Us</Link></li>
        <li><Link href="/products" class="text-black text-lg">Products</Link></li>
        <li><Link href="/contact" class="text-black text-lg">Contact Us</Link></li>
      </ul>
    </nav>
  </header>
</template>

<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";
import BaseButton from "./BaseButton.vue";

const isMenuOpen = ref(false);

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value;
};
</script>
