<script setup>
import SiteLayout from '@/Layouts/SiteLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import CarCard from "@/Components/CarCard.vue";
import Pagination from "@/Components/Pagination.vue";
import Search from "@/Components/Search.vue";
import GridCard from "@/Components/SectionLayout/GridCard.vue";
import Table from '@/Components/Table/Table.vue';
import Td from '@/Components/Table/Td.vue';
import Th from '@/Components/Table/Th.vue';
import Tr from '@/Components/Table/Tr.vue';
import SectionCard from "@/Components/SectionCard.vue";

import { useLocale } from '@/Composable/useLocale';
let { locale, dir } = useLocale()
const props = defineProps({
    items: {
        type: Object,
        default: () => ({}),
    },
    destinations: {
        type: Object,
        default: () => ({}),
    },
});

</script>

<template>

    <Head :title="$t('cars')" />

    <SiteLayout>
        <section-card class="overflow-x-scroll">

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-third-500 rtl:text-right dark:text-third-400">
                    <thead class="text-xs uppercase text-third-700 bg-third-50 dark:bg-third-700 dark:text-third-400">
                        <Th class="border-b-0 whitespace-nowrap">
                            {{ $t('car_name') }}
                        </Th>
                        <Th class="border-b-0 whitespace-nowrap" v-for="data in items.data" :key="data.id">
                            {{ data.name[locale] }}
                            <hr>
                            <br>
                            <div class="flex items-center justify-center w-16 h-16 mx-auto"> <!-- Apply flexbox -->
                                <img :src="data.image_url" :alt="data.alt[locale]"
                                    class="w-full transition-transform duration-300 hover:scale-[4] rounded-full hover:z-50">
                            </div>
                        </Th>
                    </thead>
                    <!-- <thead class="text-xs uppercase text-third-700 bg-third-50 dark:bg-third-700 dark:text-third-400">
                        <Th class="whitespace-nowrap">
                            {{ $t('car_image') }}
                        </Th>
                        <Th class="px-0 py-0 " v-for="item in items.data" :key="item.id">
                            <img :src="item.image_url" :alt="item.name[locale]"
                                class="w-full transition-transform duration-300 hover:scale-[4] rounded-full z-50">
                        </Th>
                    </thead> -->

                    <tbody class="text-center bg-white">
                        <Tr v-for="destination in destinations.data" :key="destination.id">

                            <Td>
                                {{ destination.destination[locale] }}
                            </Td>
                            <Td v-for="item in items.data" :key="item.id">
                                <div class="" v-for="price in item.prices" :key="price.id">
                                    <div class="" v-if="price.destination_id == destination.id">
                                        {{ $t('price_amount', { amount: price.amount }) }}
                                    </div>
                                </div>
                            </Td>


                        </Tr>
                    </tbody>

                </table>
            </div>
        </section-card>

    </SiteLayout>
</template>
