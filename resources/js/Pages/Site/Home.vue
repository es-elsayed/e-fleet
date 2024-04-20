<script setup>
import SiteLayout from '@/Layouts/SiteLayout.vue';
import { Head } from '@inertiajs/vue3';
import Carousel from "@/Components/Carousel.vue";
import SectionCard from "@/Components/SectionCard.vue";
import CarCard from "@/Components/CarCard.vue";
import SliderCard from "@/Components/SliderCard.vue";
import { Link } from '@inertiajs/vue3';
import { useLocale } from '@/Composable/useLocale';
let { locale, dir } = useLocale()

defineProps({
    sliders: {
        type: Object,
        default: {}
    },
    cars: {
        type: Object,
        required: true
    },
})

</script>

<template>

    <Head :title="$t('Dashboard')" />

    <SiteLayout>
        <Carousel v-if="dir" class="max-w-screen-xl mx-auto " :dir="dir" nav-position='in' :items="sliders"
            :num-in-lg="1" :num-in-md="1" pagination>
            <template v-slot="{ item }">
                <SliderCard :item="item" />
            </template>
        </Carousel>

        <section-card :title="$t('cars')" class="my-16 bg-sec-400"
            description="lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum">
            <Carousel v-if="$page.props.settings.car_list == 'slider'" nav-position='out' :items="cars" :num-in-lg="4"
                :num-in-md="2" navigation pagination>
                <template v-slot="{ item }">
                    <car-card :item="item" />
                </template>
            </Carousel>
            <div v-else
                class="grid items-center justify-center max-w-screen-xl gap-4 p-2 mx-auto text-center md:grid-cols-3 md:ps-4">
                <car-card v-for="item in cars" :key="item" :item="item" />
            </div>
            <template #actions>
                <Link href="#"
                    class="w-16 p-1 text-black border-2 rounded-md border-pr-400 hover:bg-pr-400 hover:text-white">
                See All
                </Link>
            </template>
        </section-card>

    </SiteLayout>
</template>
