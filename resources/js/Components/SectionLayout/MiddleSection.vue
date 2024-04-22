<script setup>

defineProps({
    title: {
        type: String,
        require: true,
    },
    description: {
        type: String,
        require: true,
    },
    image_url: {
        type: String,
        require: true,
    },
})
</script>
<template>
    <!-- middle section -->
    <div class="flex flex-col items-center bg-white md:flex-row rounded-xl">
        <div class="w-full px-5 py-8 space-y-4 md:space-y-8 md:px-8" :class="{ 'md:w-1/2': image_url }">
            <h5 class="text-3xl font-bold text-center">
                {{ title }}
            </h5>
            <p class="text-xl leading-10 text-justify text-gray-600 break-normal">
                {{ description }}
            </p>
        </div>
        <div v-if="image_url" class="w-full md:w-1/2">
            <img :src="image_url" class="object-cover w-full rounded-b-xl lg:rounded-b-none lg:rounded-l-xl"
                :alt="title" :title="description" />
        </div>
    </div>
</template>
