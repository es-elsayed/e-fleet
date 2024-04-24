<script setup>
import SiteLayout from '@/Layouts/SiteLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import CarCard from "@/Components/CarCard.vue";
import Pagination from "@/Components/Pagination.vue";
import InputGroup from '@/Components/Form/InputGroup.vue';
import SelectGroup from '@/Components/Form/SelectGroup.vue';
import TextareaGroup from '@/Components/Form/TextareaGroup.vue';
import Search from "@/Components/Search.vue";
import GridCard from "@/Components/SectionLayout/GridCard.vue";
import stars from '@/Components/Stars.vue';
import { useLocale } from '@/Composable/useLocale';
import { ref, onMounted } from 'vue';
let { locale, dir } = useLocale()

const props = defineProps({
    reservation: {
        type: Object,
        default: ({})
    }
});

</script>

<template>

    <Head :title="$t('cars')" />

    <SiteLayout>

        <section :title="$t('cars')" class="max-w-screen-xl mx-auto rounded-md">
            <div class="flex flex-col justify-between py-8 my-8 bg-white">
                <!-- --------------------------------------------left --------------------------------------------  -->
                <div class="p-2 border-third-800">

                    <h2 class="max-w-full px-4 text-4xl text-center text-pr-500 ms-4 font-car">
                        {{ $t('welcome_message', { name: reservation.data.full_name }) }}
                    </h2>


                    <div class="flex justify-center align-middle">
                        <hr class=" mt-8 h-0.5 w-full bg-pr-500">
                        <p class="p-2 mx-8 my-2 text-lg font-bold font-car text-pr-400 whitespace-nowrap">
                            {{ $t('order_info') }}
                        </p>

                        <hr class=" mt-8 h-0.5 w-full bg-pr-500">
                        <hr>
                    </div>

                    <div class="px-6 md:me-8">
                        <h2 class="text-2xl ax-w-full ms-4 font-car text-third-500">
                            {{ $t('res_code_ref', { code: reservation.data.code }) }}
                        </h2>
                        <form @submit.prevent="submit">
                            <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <InputGroup readonly class="col-span-2" id="full_name" label="full_name"
                                    :value="reservation.data.full_name" />

                                <InputGroup class="col-span-2" id="email" label="email" readonly
                                    :value="reservation.data.email" />

                                <InputGroup class="col-span-2" id="phone" label="phone" readonly
                                    :value="reservation.data.phone" />

                                <InputGroup class="col-span-2" id="people_number" label="people_number" readonly
                                    :value="reservation.data.people_number" />

                                <InputGroup class="col-span-2" id="customer_arrived_at" label="customer_arrived_at"
                                    readonly :value="reservation.data.customer_arrived_at" />

                                <InputGroup class="col-span-2" id="driver_arrived_at" label="driver_arrived_at" readonly
                                    :value="reservation.data.driver_arrived_at" />

                                <InputGroup class="col-span-2" id="from_destination" label="from_destination" readonly
                                    :value="reservation.data.from_destination[locale]" />

                                <InputGroup class="col-span-2" id="to_destination" label="to_destination" readonly
                                    :value="reservation.data.to_destination[locale]" />

                                <TextareaGroup gClass="sm:col-span-6" id="note" readonly label="note"
                                    :value="reservation.data.note" />

                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section>

    </SiteLayout>
</template>
