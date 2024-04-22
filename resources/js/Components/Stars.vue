<script setup>

const props = defineProps({
    number: Number,
});

</script>

<template>
    <ul class="flex justify-center mb-0">
        <li v-for="index in 5" :key="index">
            <!-- <button @click="rate(index)" name="rate" type="button" class="bg-transparent border-none outline-none"> -->
                <span class="text-4xl" :class="index <= number ? 'text-yellow-400' : 'text-third-400'">&#9733;</span>
            <!-- </button> -->
        </li>
    </ul>
</template>
