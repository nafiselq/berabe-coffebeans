<script setup>
import { defineProps, onMounted, onUnmounted, ref } from 'vue';


const props = defineProps({
    feedbacks: Array,
})

const currentIndex = ref(0);
const interval = ref(null);

// Auto-slide setiap 4 detik
const startAutoSlide = () => {
    interval.value = setInterval(() => {
        nextSlide();
    }, 4000);
};

// Hentikan slide ketika komponen di-unmount
const stopAutoSlide = () => {
    clearInterval(interval.value);
};

// Geser ke slide berikutnya
const nextSlide = () => {
    currentIndex.value = (currentIndex.value + 1) % props.feedbacks.length;
};

// Geser ke slide sebelumnya
const prevSlide = () => {
    currentIndex.value = (currentIndex.value - 1 + props.feedbacks.length) % props.feedbacks.length;
};

onMounted(() => {
    startAutoSlide();
});

onUnmounted(() => {
    stopAutoSlide();
});


</script>

<template>
    <div class="relative md:p-0 p-4">
        <img class="absolute md:block hidden left-0 md:bottom-[-100px] bottom-[-150px]"
            src="/img/logo-tumpahan-coffe-4.png" />
        <img class="absolute md:block hidden right-0 md:top-[45px]" src="/img/logo-tumpahan-coffe-3.png" />
        <div class="container mx-auto mt-[82px] flex flex-col justify-center items-center">
            <h1 class="font-bold text-primary md:text-[54px] text-[25px]">Our coffee perfection feedback</h1>
            <p class="text-grey text-[20px] md:mt-[16px] md:text-[25px] text-[15px]">Our customers has amazing things to
                say about us</p>
            <div class="md:mt-[45px] mt-[20px]">
                <div v-if="feedbacks.length > 0"
                    class="bg-secondary-orange md:px-[100px] md:py-[110px] md:w-6xl w-full flex flex-col items-center justify-center">
                    <transition name="fade" mode="out-in">
                        <p :key="feedbacks[currentIndex].id"
                            class="text-[18px] md:w-[780px] text-center text-grey tracking-wide">{{
                                feedbacks[currentIndex].comment }}</p>
                    </transition>
                    <h1 :key="feedbacks[currentIndex].id" class="text-primary font-bold text-[32px] mt-[28px]">{{
                        feedbacks[currentIndex].name }}</h1>
                    <!-- <p class="text-grey font-normal md:mb-0 mb-[100px]">Project Manager</p> -->
                    <div
                        class="absolute bottom-[-55px] w-[100px] h-[100px] md:w-[120px] md:h-[120px] bg-secondary-orange rounded-full overflow-hidden shadow-md border-4 border-white mt-4">
                        <img class="w-full h-full object-cover" :src="`/storage/${feedbacks[currentIndex].photo}`"
                            alt="User Feedback Image" />
                    </div>
                    <img class="md:absolute md:block hidden left-[350px] top-[200px]" src="/img/petik.png" />
                </div>
                <div v-else>
                    <div class="bg-orange rounded-lg p-10">
                        <h4 class="text-black font-sans text-3xl">There is no feedback now</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- <img class="absolute md:left-[135px] left-[20px] md:top-[350px] bottom-[-50px]" src="/img/left-button.png" />
        <img class="absolute md:right-[135px] right-[20px] md:top-[350px] bottom-[-50px]" src="/img/right-button.png" /> -->
    </div>
</template>
