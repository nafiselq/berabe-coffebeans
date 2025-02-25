<script setup>
import ServiceSection from './ServiceSection.vue';
</script>

<template>
    <div class="relative">
        <img class="absolute right-0 top-[-120px]" src="/img/logo-tumpahan-coffe-2.png" />
        <div class="container mx-auto mt-[82px]">
            <h1 class="text-center text-[54px] text-primary font-bold">Why are we different?</h1>
            <p class="text-center text-grey text-[20px]">We don’t just make your coffee, we make your day!</p>
            <div class="md:flex justify-between mt-12">
                <ServiceSection icon="/img/product-1.png" title="Supreme Beans"
                    subTitle="Beans that provides great taste" />
                <ServiceSection icon="/img/product-2.png" title="High Quality"
                    subTitle="We provide the highest quality" />
                <ServiceSection icon="/img/product-3.png" title="Extraordinary "
                    subTitle="Coffee like you have never tasted" />
                <ServiceSection icon="/img/product-4.png" title="Affordable Price"
                    subTitle="Our Coffee prices are easy to afford" />
            </div>
            <div class="mt-[32px] text-center">
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