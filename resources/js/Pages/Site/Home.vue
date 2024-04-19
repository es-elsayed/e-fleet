<script setup>
import SiteLayout from '@/Layouts/SiteLayout.vue';
import { Head } from '@inertiajs/vue3';
import Carousel from "@/Components/Carousel.vue";

defineProps({
    sliders: {
        type: Object,
        default: {}
    }
})
</script>

<template>

    <Head :title="$t('Dashboard')" />

    <SiteLayout>

        <Carousel wrap-arround nav-position='in' :items="sliders" :num-in-lg="1" :num-in-md="1" navigation pagination>
            <template v-slot="{ item }">
                <img :src="item.image_url" :title="item.title"
                    class="block w-full h-[200px] md:h-[600px]" alt="Wild Landscape" />
                <div class="absolute top-0 bottom-0 flex items-center justify-center text-center carousel-caption">
                    <h5 class="text-lg md:text-5xl font-Tajawal">
                        {{ item.description }}
                    </h5>
                    <!-- <p>Some representative placeholder content for the first slide.</p> -->
                </div>
            </template>
        </Carousel>

        <div>
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">{{ $t('logged_in') }}</div>
                </div>
            </div>
        </div>
    </SiteLayout>
</template>
