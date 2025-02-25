<template>
  <header class="absolute top-0 left-0 w-full z-50 bg-transparent">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <!-- Logo -->
      <div class="flex flex-row">
        <img src="/img/logo-real.png" class="md:w-[60px] md:mr-[20px]" />
        <h1 class="text-white text-[35px] font-clicker">Karya Muda Continental</h1>
      </div>

      <!-- Hamburger Menu -->
      <button id="menuToggle" class="block md:hidden text-black focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>

      <!-- Navigation -->
      <div class="hidden md:block md:rounded-full md:mr-24">
        <nav class="hidden md:flex">
          <ul class="flex flex-col md:flex-row md:space-x-12 space-y-2 md:space-y-0">
            <li><a href="/" class="text-white text-sm">Home</a></li>
            <li><a href="/about-us" class="text-white text-sm">About Us</a></li>
            <li><a href="/products" class="text-white text-sm">Products</a></li>
            <li><a href="/contact" class="text-white text-sm">Contact Us</a></li>
          </ul>
        </nav>
      </div>

      <div class="hidden md:flex md:flex-col">
        <BaseButton label="Instagram" variant="primary" size="md" />
        <!-- <div class="bg-orange rounded-full p-2">
          <a href="https://www.instagram.com/nafis.el7/" class="font-sans text-sm text-black">Instagram</a>
        </div> -->
      </div>
    </div>
    <!-- Navigation -->
    <nav id="mobileMenu" class="hidden md:hidden space-x-8">
      <ul class="flex flex-col md:flex-row md:space-x-8 space-y-2 md:space-y-0 p-4 bg-white shadow-md">
        <li><a href="#section1" class="text-custom-black font-bold hover:text-primary">Home</a></li>
        <li><a href="#section2" class="text-custom-black font-bold hover:text-primary">About Us</a></li>
        <li><a href="#section3" class="text-custom-black font-bold hover:text-primary">Gallery</a></li>
        <li><a href="#section4" class="text-custom-black font-bold hover:text-primary">Gallery</a></li>
        <li><a href="#section5" class="text-custom-black font-bold hover:text-primary">Contact Us</a></li>
      </ul>
    </nav>
  </header>
</template>


<script>
export default {
  name: "Header",
  mounted() {
    // Dropdown visibility for desktop
    const dropdownItems = document.querySelectorAll(".relative");
    dropdownItems.forEach((item) => {
      item.addEventListener("mouseover", () => {
        const dropdownMenu = item.querySelector("ul");
        if (dropdownMenu) dropdownMenu.classList.remove("hidden");
      });
      item.addEventListener("mouseout", () => {
        const dropdownMenu = item.querySelector("ul");
        if (dropdownMenu) dropdownMenu.classList.add("hidden");
      });
    });

    // Toggle mobile menu visibility
    const menuToggle = document.getElementById("menuToggle");
    const mobileMenu = document.getElementById("mobileMenu");

    menuToggle.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  },
};
</script>