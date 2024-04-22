<script setup>
defineProps({
    title: {
        type: String,
        required: false,
    },
    description: {
        type: String,
        required: false,
    }
})

</script>

<template>
    <div class="py-8 md:px-8 font-Tajawal" v-bind="$attrs">

        <section class="container mx-auto max-w-7xl">
            <!-- title -->
            <div v-if="title" class="flex justify-center align-middle">
                <hr class=" mt-8 h-0.5 w-full bg-pr-500">
                <p class="p-2 mx-8 my-2 text-lg font-bold font-car text-pr-400 whitespace-nowrap">
                    {{ title }}
                </p>

                <hr class=" mt-8 h-0.5 w-full bg-pr-500">
                <hr>
            </div>

            <p v-if="description" class="mb-8 text-lg font-normal text-center text-sec-900 md:text-xl ">
                {{ description }}
            </p>

            <slot />
        </section>

        <div v-if="$slots.actions" class="flex items-center max-w-xl mx-auto mt-8 text-center justify-evenly">
            <slot name="actions" />

        </div>
    </div>
    <!-- <div class="max-w-screen-xl mx-auto" v-bind="$attrs">
        <div class="flex justify-center align-middle">
            <hr class=" mt-8 h-0.5 w-2/5 bg-pr-500">
            <p v-if="title" class="p-2 mx-8 my-2 text-lg font-bold font-car text-pr-400 ">
                {{ title }}
            </p>

            <hr class=" mt-8 h-0.5 w-2/5 bg-pr-500">
            <hr>
        </div>
        <p v-if="description" class="font-normal text-center ext-lg text-sec-900 md:text-xl">
            {{ description }}
        </p>


        <section class="">
            <slot />
        </section>

        <div v-if="$slots.actions" class="flex items-center max-w-xl mx-auto my-4 text-center justify-evenly">
            <slot name="actions" />

        </div>
    </div> -->
</template>
