<script setup>
import { Link } from '@inertiajs/vue3';
import stars from '@/Components/Stars.vue';

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
console.log(props.item.stars);

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
                <h5 class="text-xl font-bold tracking-tight text-slate-900">{{ item.brand }}
                    {{ item.model }}
                    <!-- {{ item.engine }} -->
                </h5>
            </div>
            <div class="flex items-center justify-between mt-2 mb-5">
                <p>
                    <span class="text-3xl font-bold text-slate-900">{{ item.price_per_day }}</span>
                    <span class="text-sm line-through text-slate-900">
                        {{ parseInt((item.price_per_day * 100) / (100 - item.reduce)) }}
                    </span>
                </p>
                <stars :yellowIconsCount="parseInt(item.stars)" />

            </div>
            <!-- <span class="mr-2">
                                    <a v-if="item.user.phone !== null" :href="`https://api.whatsapp.com/send?phone=${'00218' + api.whaitem.user.phone
                            }`" target="_blank">
                                        <svg class="h-7 w-7 fill-green-600" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 448 512">
                                            <path
                                                d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                        </svg>
                                    </a>
                                </span> -->
            <!-- <a :href="`https://api.whatsapp.com/send?phone=${item.phone}&text=car reservation%0abrand:${item.brand} ${item.model}`" target="_blank" -->
            <a :href="`https://api.whatsapp.com/send?phone=${item.phone}&text=reservation car: ${item.brand} ${item.model}`" target="_blank"
                class="flex items-center justify-center rounded-md bg-slate-900 hover:bg-pr-400 px-5 py-2.5 text-center text-sm font-medium text-white  focus:outline-none focus:ring-4 focus:ring-blue-300">
            <svg id="thisicon" class="w-6 h-6 mr-4 fill-white" xmlns="http://www.w3.org/2000/svg" height="1em"
                viewBox="0 0 512 512">
                <path
                    d="M184 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H96c-35.3 0-64 28.7-64 64v16 48V448c0 35.3 28.7 64 64 64H416c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H376V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H184V24zM80 192H432V448c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V192zm176 40c-13.3 0-24 10.7-24 24v48H184c-13.3 0-24 10.7-24 24s10.7 24 24 24h48v48c0 13.3 10.7 24 24 24s24-10.7 24-24V352h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H280V256c0-13.3-10.7-24-24-24z" />
            </svg>
            &nbsp; &nbsp;
            Reserve
            </a>
        </div>
    </div>
</template>
