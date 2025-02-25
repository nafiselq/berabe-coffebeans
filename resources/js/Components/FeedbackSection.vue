<script setup>
    import CardFeedback from './CardFeedback.vue';
</script>

<template>
    <div class="relative">
        <img class="absolute left-0 bottom-[-100px]" src="/img/logo-tumpahan-coffe-4.png"/>
        <img class="absolute right-0 top-[45px]" src="/img/logo-tumpahan-coffe-3.png" />
        <div class="container mx-auto mt-[82px] flex flex-col justify-center items-center">
            <h1 class="font-bold text-primary text-[54px]">Our coffee perfection feedback</h1>
            <p class="text-grey text-[20px] mt-[16px]">Our customers has amazing things to say about us</p>
            <div class="mt-[45px]">
                <CardFeedback />
            </div>
        </div>
        <img class="absolute left-[215px] top-[350px]" src="/img/left-button.png" />
        <img class="absolute right-[215px] top-[350px]" src="/img/right-button.png" />
    </div>
</template>