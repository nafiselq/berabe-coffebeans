<script setup>
import PublicLayout from '@/Layouts/PublicLayout.vue';
import { Head } from '@inertiajs/vue3';
import CardProduct from '@/Components/CardProduct.vue';
import FooterSection from '@/Components/FooterSection.vue';

const dataProduct = [
    {
        'id': 1,
        'title': 'Mantap 1',
        'subtitle': 'sub mantap 1',
        'image': 'https://images.unsplash.com/photo-1587049016823-69ef9d68bd44?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8Y29mZmUlMjBiZWFuc3xlbnwwfHwwfHx8MA%3D%3D',
    },
    {
        'id': 2,
        'title': 'Mantap 2',
        'subtitle': 'sub mantap 2',
        'image': 'https://images.unsplash.com/photo-1513530176992-0cf39c4cbed4?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    },
    {
        'id': 3,
        'title': 'Mantap 3',
        'subtitle': 'sub mantap 3',
        'image': 'https://images.unsplash.com/photo-1524350876685-274059332603?q=80&w=3542&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    },
    {
        'id': 4,
        'title': 'Mantap 3',
        'subtitle': 'sub mantap 3',
        'image': 'https://images.unsplash.com/photo-1524350876685-274059332603?q=80&w=3542&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    },
    {
        'id': 5,
        'title': 'Mantap 3',
        'subtitle': 'sub mantap 3',
        'image': 'https://images.unsplash.com/photo-1524350876685-274059332603?q=80&w=3542&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    }
]
</script>

<template>
    <Head title="Products" />
    <PublicLayout>
        <section class="relative bg-[url('/img/coffee_image.png')] bg-no-repeat bg-cover bg-center h-[90px]">
            <div class="absolute inset-0 bg-black opacity-90"></div>
        </section>
        <section class="flex flex-col justify-start items-center">
            <h1 class="md:text-[40px] md:w-[60%] text-center text-gray-600 md:mt-[50px] mt-[70px] font-bold">Our Products</h1>
            <div class="flex flex-wrap justify-around items-center md:mt-[50px] mt-[70px] md:w-screen">
                <CardProduct
                    v-for="product in dataProduct"
                    :key="product.id"
                    :title="product.title"
                    :subTitle="product.subtitle"
                    :image="product.image"
                    />
            </div>
        </section>
        <FooterSection />
    </PublicLayout>
</template>