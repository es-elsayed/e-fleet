<script setup>
import { Link } from '@inertiajs/vue3';
import stars from '@/Components/Stars.vue';
import { useLocale } from '@/Composable/useLocale';
let { locale, dir } = useLocale()
import WhatsappIcon from '@/Icons/whatsapp.vue';
import CalenderIcon from '@/Icons/calender.vue';

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
    <div :class="'relative flex flex-col w-full max-w-md overflow-hidden bg-white border border-third-100 rounded-lg shadow-md md:m-4 ' + gClass"
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
                    {{ item.name[locale] }}
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
            <div class="flex justify-between">
                <Link :href="route('site.reservations.create', { car: item.id })"
                class="flex items-center justify-center rounded-md bg-third-900 hover:opacity-75 px-5 py-2.5 text-center text-sm font-medium text-white  focus:outline-none focus:ring-4 focus:ring-blue-300">
                {{ $t('reserve_direct') }}
                &nbsp; &nbsp;
                <calender-icon />
            </Link>
            <a :href="`https://api.whatsapp.com/send?phone=${item.phone}&text=reservation car: ${item.brand[locale]} ${item.model[locale]}`"
                    target="_blank" class="flex items-center justify-center rounded-md bg-third-900 hover:opacity-75 px-5 py-2.5 text-center text-sm font-medium text-white hover:text-white  focus:outline-none focus:ring-4 focus:ring-blue-300">
                <whatsapp-icon class="fill-green-600" />
                </a>
            </div>
        </div>
    </div>
</template>
