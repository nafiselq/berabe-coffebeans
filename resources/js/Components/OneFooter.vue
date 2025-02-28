<script setup>
import BaseButton from './BaseButton.vue';
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';
import { showError, showSuccess } from '@/utils/swal';

const email = ref("");

const sanitizeEmail = (email) => {
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailPattern.test(email) ? email : null;
};


const subscribe = () => {
    const cleanEmail = sanitizeEmail(email.value);

    if (!cleanEmail) {
        showError("Invalid email format!");
        return;
    }

    router.post('/subscribe', { email: email.value }, {
        onSuccess: () => {
            showSuccess("Successfully subscribed!");
            email.value = ""
        },
        onError: (errors) => {
            let errorMessage = errors.email ? errors.email[0] : "Something went wrong!";
            showError(errorMessage);
        }
    })
}
</script>

<template>
    <section
        class="relative bg-[url('/img/bg-coffe.png')] bg-no-repeat bg-cover bg-center h-[374px] flex flex-col justify-center items-center">
        <div class="absolute inset-0 bg-primary opacity-[70%]"></div>
        <div class="overflow-hidden z-10 flex flex-col items-center justify-center">
            <h1 class="text-white md:text-[54px] font-bold">Subscribe to get the Latest News</h1>
            <p class="md:text-[20px] md:w-full w-[400px] text-center text-white">Don’t miss out on our latest news,
                updates, tips and special offers</p>
            <form class="md:mt-[26px] mt-[10px] flex flex-row" @submit.prevent="subscribe">
                <input v-model="email" class="bg-white md:p-4 md:w-[642px]" type="text" placeholder="Enter your email">
                <BaseButton label="Subscribe" variant="primary" size="md" rounded="false" />
            </form>
        </div>
    </section>
</template>
