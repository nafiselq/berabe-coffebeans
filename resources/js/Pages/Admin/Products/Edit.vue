<template>
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div>
                    <NavLink :href="route('product')" :active="route().current('product')">
                        ⬅ Back to Product
                    </NavLink>
                    <h1 class="text-2xl font-bold mt-12">Edit Product</h1>
                    <form @submit.prevent="submit">
                        <div class="mb-4">
                            <label class="block">Title:</label>
                            <input v-model="form.title" type="text" class="w-full p-2 border rounded" required>
                        </div>
                        <div class="mb-4">
                            <label class="block">Subtitle:</label>
                            <input v-model="form.subtitle" type="text" class="w-full p-2 border rounded" required>
                        </div>
                        <div class="mb-4">
                            <label class="block">Image:</label>
                            <input type="file" @change="handleFileChange" class="w-full p-2 border rounded">
                            <img v-if="form.photo" :src="`/storage/${form.photo}`" class="w-16 h-16 mt-2" />
                        </div>
                        <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Update</button>
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
import NavLink from '@/Components/NavLink.vue';


const props = defineProps({
    product: Object,
});

const form = ref({
    title: props.product.title,
    subtitle: props.product.subtitle,
    photo: props.product.photo,
    image: null,
});

const handleFileChange = (event) => {
    form.value.image = event.target.files[0];
};

const submit = () => {
    const formData = new FormData();
    formData.append('title', form.value.title);
    formData.append('subtitle', form.value.subtitle);
    if (form.value.image) {
        formData.append('image', form.value.image);
    }
    router.post(`/product/${props.product.id}`, formData);
};
</script>
