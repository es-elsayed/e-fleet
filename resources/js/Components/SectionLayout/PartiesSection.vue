<script setup>
defineProps({
    title: {
        type: String,
        default: "",
    },
    description: {
        type: String,
        default: "",
    }
})
</script>

<template>
    <div class="mx-auto text-center rounded-md lg:bg-white lg:py-8">
        <h3 class="mb-4 text-2xl md:text-3xl" v-if="title">
            {{ title }}
        </h3>
        <p class="mb-4 text-lg md:text-xl" v-if="description">
            {{ description }}
        </p>

        <div v-if="$slots.actions" class="mt-8">
            <slot name="actions" />

        </div>
    </div>

</template>
