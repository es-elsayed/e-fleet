<script setup>
defineProps({
    value: {
        type: String,
    },
    required: Boolean
});
</script>

<template>
    <label class="block text-xl font-medium text-third-700">
        <span v-if="value">{{ $t(value) }}</span>
        <span v-if="required" class="text-red-600">&#160;*</span>
        <span v-else><slot /></span>
    </label>
</template>
