<template>
    <div>
        <div class="w-[280px] h-[284px] bg-secondary-orange flex flex-col justify-center content-center items-center">
            <img :src="icon" alt="Icon" class="w-[88px] h-[88px] mb-[25px]" />
            <h1 class="font-sans text-primary text-[28px] font-bold">{{ title }}</h1>
            <p class="text-grey text-[18px] w-[176px] text-center">{{ subTitle }}</p>
        </div>
    </div>
</template>

<script setup>


const props = defineProps({
    icon: {
        type: String,
    },
    title: {
        type: String,
    },
    subTitle: {
        type: String,
    },
});
</script>