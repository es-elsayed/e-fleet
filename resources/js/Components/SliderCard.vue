<script setup>
import { Link } from '@inertiajs/vue3';
import stars from '@/Components/Stars.vue';
import { useLocale } from '@/Composable/useLocale';
let { locale, dir } = useLocale()

defineProps({
    item: {
        type: Object,
        required: true,
    },
})

</script>
<template>
    <div class="flex flex-col justify-between mx-12 my-8 md:w-3/5 md:me-12 md:mx-0">
        <h1
            class="inline-block py-4 mb-4 text-4xl font-bold text-center text-transparent rtl:bg-gradient-to-l ltr:bg-gradient-to-r from-pr-600 via-pr-400 to-pr-300 bg-clip-text md:text-start font-car md:text-6xl">
            <!-- class="mb-8 text-4xl font-bold text-center text-gray-900 md:text-start font-car md:text-7xl"> -->
            <!-- <span class="text-pr-400">
                            {{ item.title[locale].substring(0, item.title[locale].indexOf(" ")) }}
                        </span>
                        {{ item.title[locale].substring(item.title[locale].indexOf(" ") + 1) }} -->
            {{ item.title[locale] }}
        </h1>
        <div class="md:w-3/5 md:hidden ">
            <img :src="item.image_url" alt="home car">
        </div>
        <p class="mx-8 text-justify md:mx-0">
            {{ item.description[locale] }}
        </p>
        <div class="flex justify-center mt-12 md:justify-start md:w-2/3 me-12 ">
            <Link :href="route('site.cars.index')">
            <button
                class="w-32 p-2 font-bold text-white border-2 border-white rounded-md bg-pr-400 hover:bg-pr-500 md:me-12 md:mx-12 mx-7 ">CARS</button>
            </Link>
            <Link :href="route('site.contact_us.create')">
                <button class="w-32 p-2 text-black border-2 rounded-md border-pr-400 hover:bg-sec-400">
                    CONTACT US
                </button>
            </Link>
        </div>
    </div>
    <div class="hidden md:w-3/5 md:block ">
        <img :src="item.image_url" alt="home car">
    </div>

</template>
