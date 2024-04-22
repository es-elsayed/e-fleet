<script setup>
import SiteLayout from '@/Layouts/SiteLayout.vue';
import { Head } from '@inertiajs/vue3';
import Carousel from "@/Components/Carousel.vue";
import SectionCard from "@/Components/SectionCard.vue";
import CarCard from "@/Components/CarCard.vue";
import GridCard from "@/Components/SectionLayout/GridCard.vue";
import MiddleSection from "@/Components/SectionLayout/MiddleSection.vue";
import PartiesSection from "@/Components/SectionLayout/PartiesSection.vue";
import SliderCard from "@/Components/SliderCard.vue";
import TestimonialCard from "@/Components/Cards/TestimonialCard.vue";
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
    testimonials: {
        type: Object,
        required: false
    },
})

</script>

<template>

    <Head :title="$t('Dashboard')" />

    <SiteLayout>
        <Carousel v-if="dir" wrap-arround class="max-w-screen-xl mx-auto " :dir="dir" nav-position='in' :items="sliders.data"
            :num-in-lg="1" :num-in-md="1" pagination>
            <template v-slot="{ item }">
                <SliderCard :item="item" />
            </template>
        </Carousel>

        <section-card :title="$t('cars')" class="my-16 bg-sec-400" description="">
            <Carousel v-if="$page.props.settings.car_list == 'slider'" nav-position='out' :items="cars.data"
                :num-in-lg="4" :num-in-md="2" navigation pagination>
                <template v-slot="{ item }">
                    <car-card :item="item" />
                </template>
            </Carousel>
            <grid-card v-else
                class="grid items-center justify-center max-w-screen-xl gap-4 p-2 mx-auto text-center lg:grid-cols-3 md:grid-cols-2 lg:ps-4">
                <car-card v-for="item in cars.data" :key="item" :item="item" />
            </grid-card>
            <template #actions>
                <Link :href="route('site.cars.index')"
                    class="p-2 text-2xl text-black border-2 rounded-md border-pr-400 hover:bg-pr-400 hover:text-white whitespace-nowrap">
                {{ $t('see_all') }}
                </Link>
            </template>
        </section-card>

        <section-card>
            <middle-section :title="$page.props.about.name[locale]"
                :description="$page.props.about.description[locale]" image_url="assets/images/middle.png" />
        </section-card>

        <section-card>
            <parties-section v-if="$page.props.about.tax_register" :title="$t('tax_register',{number:$page.props.about.tax_register })"
                :description="$t('reserve_your_car.description')">
                <template #actions>
                    <Link :href="route('site.cars.index')"
                        class="p-2 text-2xl text-black border-2 rounded-md border-pr-400 hover:bg-pr-400 hover:text-white whitespace-nowrap">
                    {{ $t('reserve_your_car.now') }}
                    </Link>
                </template>
            </parties-section>
        </section-card>

        <section-card v-if="testimonials" :title="$t('testimonials')">
            <Carousel wrap-arround nav-position='out' :items="testimonials.data" :num-in-lg="3" :transition="2000"
                navigation pagination>
                <template v-slot="{ item }">
                    <TestimonialCard :item="item" />
                </template>
            </Carousel>
        </section-card>

    </SiteLayout>
</template>
