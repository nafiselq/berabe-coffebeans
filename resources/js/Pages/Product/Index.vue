<script setup>
import PublicLayout from '@/Layouts/PublicLayout.vue';
import { Head } from '@inertiajs/vue3';
import CardProduct from '@/Components/CardProduct.vue';
import FooterSection from '@/Components/FooterSection.vue';

const props = defineProps({
    products: Array
});
</script>

<template>
    <Head title="Products" />
    <PublicLayout>
        <!-- Hero Section -->
        <section class="relative bg-[url('/img/coffee_image.png')] bg-no-repeat bg-cover bg-center h-[90px]">
            <div class="absolute inset-0 bg-black bg-opacity-90"></div>
        </section>

        <!-- Products Section -->
        <section class="flex flex-col items-center">
            <h1 class="text-center text-gray-600 font-bold md:text-[40px] text-[28px] mt-10 md:mt-[50px] w-[80%] md:w-[60%]">
                Our Products
            </h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:mt-[50px] mt-[30px] w-full max-w-7xl px-4">
                <CardProduct
                    v-for="product in props.products"
                    :key="product.id"
                    :title="product.title"
                    :subTitle="product.subtitle"
                    :image="product.photo"
                />
            </div>
        </section>

        <!-- Footer -->
        <FooterSection />
    </PublicLayout>
</template>
