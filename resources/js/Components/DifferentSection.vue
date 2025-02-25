<script setup>
import BaseButton from './BaseButton.vue';
import ServiceSection from './ServiceSection.vue';
</script>

<template>
    <div class="relative">
        <img class="absolute right-0 md:top-[-120px] top-[-210px]" src="/img/logo-tumpahan-coffe-2.png" />
        <div class="md:flex flex-col justify-center md:container md:mx-auto md:mt-[82px] mt-[120px]">
            <h1 class="text-center text-[54px] text-primary font-bold">Why are we different?</h1>
            <p class="text-center text-grey text-[20px]">We plant and care for our Coffee Beans with love, we make you day happy.</p>
            <div class="flex md:flex-row md:justify-between flex-col justify-center items-center mt-12">
                <ServiceSection icon="/img/product-1.png" title="Supreme Beans"
                    subTitle="Beans that provides great taste" />
                <ServiceSection icon="/img/product-2.png" title="High Quality"
                    subTitle="We provide the highest quality" />
                <ServiceSection icon="/img/product-3.png" title="Extraordinary "
                    subTitle="Coffee like you have never tasted" />
                <ServiceSection icon="/img/product-4.png" title="Affordable Price"
                    subTitle="Our Coffee prices are easy to afford" />
            </div>
            <div class="mt-[70px] text-center">
                <p class="font-sans text-[20px] text-grey">Great ideas start with great coffee, Lets help you achieve
                    that</p>
                <h1 class="font-sans text-primary text-[30px] font-bold">Get started today.</h1>
                <div class="mt-[20px] flex flex-row justify-center">
                    <BaseButton label="Join Us" variant="primary" size="md" />
                </div>
            </div>
        </div>

    </div>
</template>