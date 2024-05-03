<script setup>
import stars from '@/Components/Stars.vue';

const props = defineProps({
    item: Object,
});


</script>

<template>
    <div class="mx-8 my-4 md:my-4">
        <div class="flex justify-center mb-6">
            <img :src="item.image_url"  :alt="item.alt"
                class="w-32 rounded-full shadow-lg dark:shadow-black/20" />
        </div>
        <h5 class="mb-2 text-lg font-bold">{{ item.name }}</h5>
        <!-- <h6 class="mb-4 font-medium text-primary dark:text-primary-400">
            {{ item.email }}
        </h6> -->
        <p class="mb-4">
            {{ item.description }}
        </p>
        <stars :number="item.rate" />
    </div>
</template>
