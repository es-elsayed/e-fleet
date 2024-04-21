<script setup>
import SiteLayout from '@/Layouts/SiteLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import CarCard from "@/Components/CarCard.vue";
import Pagination from "@/Components/Pagination.vue";
import Search from "@/Components/Search.vue";
import GridCard from "@/Components/SectionLayout/GridCard.vue";

const props = defineProps({
    cars: {
        type: Object,
        default: ({})
    }
});

</script>

<template>

    <Head :title="$t('cars')" />

    <SiteLayout>
        <section :title="$t('cars')" class="max-w-screen-xl mx-auto my-16 bg-sec-400 ">
            <search />

            <!-- <div class="max-w-screen-xl p-3 mx-auto mt-10 bg-gray-200 rounded-md shadow-xl">
        <form action="http://car-app.test/cars/search">
            <div class="flex flex-col justify-between gap-2 md:flex-row md:gap-28">
                <div class="flex flex-col justify-between w-full md:flex-row">
                    <input type="text" placeholder="brand" name="brand" class="block  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                <input type="text" placeholder="model" name="model" class="block  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                <input type="number" placeholder="$ minimum price " name="min_price" class="block  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                <input type="number" placeholder="$ maximum price " name="max_price" class="block  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                </div>
                <button class="w-20 p-2 font-medium text-white rounded-md bg-pr-400 hover:bg-pr-500" type="submit" placeholder="brand"> Search</button>
            </div>
        </form>
    </div> -->
            <grid-card >
                <car-card v-for="item in cars.data" :key="item" :item="item" />
            </grid-card>
            <Pagination class="pb-8" :links="cars.meta.links" />
        </section>

    </SiteLayout>
</template>
