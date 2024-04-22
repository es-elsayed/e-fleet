<script setup>
import Input from "./Input.vue";
import Label from "./Label.vue";
import Error from "./Error.vue";

defineProps({
    modelValue: {},
    type: {
        type: String,
        default: "text",
    },
    label: {
        type: String,
        default: "",
    },
    errorMessage: {
        type: String,
        default: "",
    },
    gClass: {
        type: String,
        default: "",
    },
    placeholder: {
        type: String,
        default: "",
    }
});
</script>

<template>
    <div :class="gClass">
        <Label v-if="label" :value="label" :required="$attrs.required" />
        <textarea
            class="block w-full mt-1 border-third-300 rounded-md shadow-sm focus:border-pr-500 focus:ring-pr-500"
            :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="input" rows="10" :placeholder="$t(placeholder)"
            v-bind="$attrs" />
        <Error v-if="errorMessage" class="mt-1" :message="errorMessage" />
    </div>
</template>
