<script setup>
import SiteLayout from '@/Layouts/SiteLayout.vue';
import { Head } from '@inertiajs/vue3';
import Carousel from "@/Components/Carousel.vue";

const items = {
    1:{
        title: "Image One",
        description: "Description One",
        src: "https://hd.wallpaperswide.com/thumbs/chevy_camaro_classic_cars-t2.jpg",
    },
    2:{
        title: "Image Two",
        description: "Description Two",
        src: "https://hd.wallpaperswide.com/thumbs/chevy_camaro_classic_cars-t2.jpg",
    },
    3:{
        title: "Image Three",
        description: "Description Three",
        src: "https://hd.wallpaperswide.com/thumbs/chevy_camaro_classic_cars-t2.jpg",
    },
    4:{
        title: "Image Four",
        description: "Description Four",
        src: "https://hd.wallpaperswide.com/thumbs/chevy_camaro_classic_cars-t2.jpg",
    },
}
</script>

<template>
    <Head :title="$t('Dashboard')" />

    <SiteLayout>

        <Carousel nav-position='in' :items="items" :num-in-lg="1"
            :num-in-md="1" navigation pagination>
            <template v-slot="{ item }">
                <img src="https://hd.wallpaperswide.com/thumbs/chevy_camaro_classic_cars-t2.jpg" :title="item.title" class="block w-full h-[200px] md:h-[600px]" alt="Wild Landscape" />
                <div class="absolute top-0 bottom-0 flex items-center justify-center text-center carousel-caption">
                    <h5 class="text-lg md:text-5xl font-Tajawal">
                        {{ item.description }}
                    </h5>
                    <!-- <p>Some representative placeholder content for the first slide.</p> -->
                </div>
            </template>
        </Carousel>

        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">{{ $t('logged_in') }}</div>
                </div>
            </div>
        </div>
    </SiteLayout>
</template>
