<template>
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div>
                    <h1 class="text-2xl font-bold mb-10">Edit About</h1>
                    <form @submit.prevent="submit">
                        <div class="mb-4">
                            <label class="block">Title:</label>
                            <input v-model="form.title" type="text" class="w-full p-2 border rounded" required>
                        </div>
                        <div class="mb-4">
                            <label class="block">Content:</label>
                            <textarea rows="10" v-model="form.content" type="text" class="w-full p-2 border rounded"
                                required></textarea>
                        </div>
                        <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Update Content</button>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import { ref, defineProps } from 'vue';
import { router } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { showError, showSuccess } from '@/utils/swal';


const props = defineProps({
    about: Object,
});

const form = ref({
    title: props.about.title,
    content: props.about.content,
});

const submit = () => {
    router.post(`/admin/about/${props.about.id}`, form.value, {
        onSuccess: () => {
            showSuccess("Successfully update content about us!");
        },
        onError: (errors) => {
            console.log("ini error s: ", errors);
            showError("Something went wrong!");
        }
    })
};

</script>
