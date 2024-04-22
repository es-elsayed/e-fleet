<script setup>
import { Link } from '@inertiajs/vue3';
import stars from '@/Components/Stars.vue';
import { useLocale } from '@/Composable/useLocale';
let { locale, dir } = useLocale()

const props = defineProps({
    item: {
        type: Object,
        required: true,
    },
    gClass: {
        type: String,
        required: false,
        default: ''
    }
})

</script>
<template>
    <div :class="'relative flex flex-col w-full max-w-md overflow-hidden bg-white border border-gray-100 rounded-lg shadow-md md:m-4 ' + gClass"
        v-bind="$attrs">
        <Link class="relative flex mx-3 mt-3 overflow-hidden h-60 rounded-xl" href="#">
        <img loading="lazy" class="object-cover w-full" :src="item.image_url" alt="product image" />
        <span v-if="item.discount"
            class="absolute top-0 left-0 px-2 m-2 text-sm font-medium text-center text-white rounded-full bg-pr-400">
            {{ item.discount }} % OFF
        </span>
        </Link>
        <div class="px-5 pb-5 mt-4">
            <div>
                <h5 class="text-xl font-bold tracking-tight text-third-900">
                    {{ item.brand[locale] }}
                    {{ item.model[locale] }}
                </h5>
            </div>
            <div class="flex items-center justify-between mt-2 mb-5">
                <p class="font-bold text-md text-third-900">
                    {{ item.category[locale] }}
                </p>
                <!-- <p>
                    <span class="text-3xl font-bold text-third-900">{{ item.price_per_day }}</span>
                    <span class="text-sm line-through text-third-900">
                        {{ parseInt((item.price_per_day * 100) / (100 - item.reduce)) }}
                    </span>
                </p> -->
                <stars :number="parseInt(item.stars)" />

            </div>
            <a :href="`https://api.whatsapp.com/send?phone=${item.phone}&text=reservation car: ${item.brand} ${item.model}`"
                target="_blank"
                class="flex items-center justify-center rounded-md bg-third-900 hover:bg-pr-400 px-5 py-2.5 text-center text-sm font-medium text-white  focus:outline-none focus:ring-4 focus:ring-blue-300">
                <svg id="thisicon" class="w-6 h-6 mr-4 fill-white" xmlns="http://www.w3.org/2000/svg" height="1em"
                    viewBox="0 0 512 512">
                    <path
                        d="M184 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H96c-35.3 0-64 28.7-64 64v16 48V448c0 35.3 28.7 64 64 64H416c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H376V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H184V24zM80 192H432V448c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V192zm176 40c-13.3 0-24 10.7-24 24v48H184c-13.3 0-24 10.7-24 24s10.7 24 24 24h48v48c0 13.3 10.7 24 24 24s24-10.7 24-24V352h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H280V256c0-13.3-10.7-24-24-24z" />
                </svg>
                &nbsp; &nbsp;
                {{ $t('reserve') }}
            </a>
        </div>
    </div>
</template>
