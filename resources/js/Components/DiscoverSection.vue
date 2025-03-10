<script setup>
import BaseButton from './BaseButton.vue';
</script>


<template>
    <div class="md:text-start text-center md:container md:mx-auto py-[82px] relative">
        <div class="md:flex md:flex-row md:justify-between flex flex-col items-center md:p-0 p-4">
            <div class="mt-[68px] flex flex-col md:justify-start md:items-start justify-center items-center">
                <h1 class="font-sans md:text-[40px] text-[30px] text-primary font-bold">Discover the best coffee with Authentic Indonesian Coffe Beans</h1>
                <p class="mt-[28px] md:w-[585px] text-grey text-[20px]">
                    We have the best Indonesian Coffee Beans. Planted in the fertile tropical soil of Indonesia ensures the best quality coffee beans. Come check our product availability.
                </p>
                <!-- <div class="mt-[29px]">
                    <BaseButton label="Learn More" variant="primary" size="md" />
                </div> -->
            </div>
            <img src="/img/logo-kopi.png" class="md:w-[50%] w-[70%]"/>
            <img class="absolute left-[-75px] bottom-[-50px]" src="/img/logo-tumpahan-coffe-1.png"/>
        </div>
    </div>
</template>