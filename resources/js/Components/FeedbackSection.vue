<script setup>
    import CardFeedback from './CardFeedback.vue';
</script>

<template>
    <div class="relative md:p-0 p-4">
        <img class="absolute md:block hidden left-0 md:bottom-[-100px] bottom-[-150px]" src="/img/logo-tumpahan-coffe-4.png"/>
        <img class="absolute md:block hidden right-0 md:top-[45px]" src="/img/logo-tumpahan-coffe-3.png" />
        <div class="container mx-auto mt-[82px] flex flex-col justify-center items-center">
            <h1 class="font-bold text-primary md:text-[54px] text-[25px]">Our coffee perfection feedback</h1>
            <p class="text-grey text-[20px] md:mt-[16px] md:text-[25px] text-[15px]">Our customers has amazing things to say about us</p>
            <div class="md:mt-[45px] mt-[20px]">
                <CardFeedback />
            </div>
        </div>
        <img class="absolute md:left-[135px] left-[20px] md:top-[350px] bottom-[-50px]" src="/img/left-button.png" />
        <img class="absolute md:right-[135px] right-[20px] md:top-[350px] bottom-[-50px]" src="/img/right-button.png" />
    </div>
</template>