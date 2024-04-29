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
import { ref, onMounted, watch } from 'vue';
let { locale, dir } = useLocale()

const props = defineProps({
    car: {
        type: Object,
        default: ({})
    },
    places: {
        type: Object,
        default: ({})
    }
});

let from_place_id = ref(null);
let destinations = ref(null);
watch(
    () => from_place_id.value,
    (id) => {
        axios.get(route('api.destinations.search', { id: id })).then((response) => {
            destinations.value = response.data.data;
        });
    }
);
let to_place_id = ref(null);
let price = ref(null);

const form = useForm({
    full_name: "",
    email: "",
    phone: "",
    customer_arrived_at: "",
    driver_arrived_at: "",
    car_pricing_id: "",
    from_adderss: "",
    to_adderss: "",
    people_number: 1,
    note: "",
});

let destinationId = ref(null);
let selectedDestination = ref(null);

watch(
    () => destinationId.value,
    (id) => {
        axios.get(route('api.car.destination.price', { car: props.car.data.id, destination: id })).then((response) => {
            selectedDestination.value = response.data.data
            form.car_pricing_id = response.data.data.id
            console.log(response.data.data);
        });
    }
);

const submit = () => {
    form.post(route("site.reservations.store", { car: props.car.data.id }), {
        onSuccess: () => form.reset(),
        // onFinish: () => form.reset(),
    });
};

const getTranslatedNames = (dests, lang) => {
    return dests.map(item => {
        return {
            id: item.id,
            name: item.name[lang]
        };
    });
};
</script>

<template>

    <Head :title="$t('reservation')" />

    <SiteLayout>

        <section :title="$t('cars')" class="max-w-screen-xl mx-auto rounded-md">
            <div class="flex flex-col justify-between py-16 my-16 bg-white md:flex-row">
                <!-- --------------------------------------------left --------------------------------------------  -->
                <div class="p-2 border-third-800 md:w-2/3 ltr:md:border-r rtl:md:border-l">

                    <h2 class="max-w-full text-4xl ms-4 font-car md:text-6xl">
                        {{ car.data.name[locale] }}
                    </h2>

                    <div class="flex items-center justify-around mt-10 me-10">
                        <div class="w-1/5 md:w-1/3 h-[0.25px] bg-third-500 "> </div>
                        <p>Order Informations</p>
                        <div class="w-1/5 md:w-1/3 h-[0.25px] bg-third-500 "> </div>
                    </div>

                    <div class="px-6 md:me-8">
                        <form @submit.prevent="submit">
                            <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <InputGroup class="col-span-3" v-model="form.full_name" id="full_name" label="full_name"
                                    required :placeholder="$t('placeholder.full_name')"
                                    :error-message="form.errors.full_name" />

                                <InputGroup class="col-span-3" type="email" v-model="form.email" id="email"
                                    label="email" placeholder="johndoe@gmail.com" :error-message="form.errors.email" />

                                <InputGroup class="col-span-3" v-model="form.phone" id="phone" label="phone" required
                                    :placeholder="$t('placeholder.phone')" :error-message="form.errors.phone" />

                                <InputGroup type="number" class="col-span-3" v-model="form.people_number" required
                                    id="people_number" label="people_number"
                                    :placeholder="$t('placeholder.people_number')" min="1" max="50"
                                    :error-message="form.errors.people_number" />

                                <InputGroup type="datetime-local" class="col-span-3" v-model="form.customer_arrived_at"
                                    id="customer_arrived_at" label="customer_arrived_at"
                                    :error-message="form.errors.customer_arrived_at" />

                                <InputGroup type="datetime-local" class="col-span-3" v-model="form.driver_arrived_at"
                                    id="driver_arrived_at" label="driver_arrived_at"
                                    :error-message="form.errors.driver_arrived_at" />

                                <SelectGroup :placeholder="$t('Select', { name: $t('from_place') })" required
                                    handleTranslate class="col-span-3" label="from_place" v-model="from_place_id"
                                    :items="places.data" />

                                <InputGroup class="col-span-3" v-model="form.from_adderss" id="from_adderss"
                                    label="from_adderss" :error-message="form.errors.from_adderss" />

                                <SelectGroup :placeholder="$t('Select', { name: $t('to_place') })" handleTranslate
                                    required class="col-span-3" label="to_place" v-model="destinationId"
                                    :items="destinations" :error-message="form.errors.car_pricing_id" />

                                <InputGroup class="col-span-3" v-model="form.to_adderss" id="to_adderss"
                                    label="to_adderss" :error-message="form.errors.to_adderss" />

                                <TextareaGroup gClass="sm:col-span-6" v-model="form.note" id="note"
                                    placeholder="leave_note" label="note" :error-message="form.errors.message" />

                            </div>
                            <div class="hidden mt-12 md:block ">
                                <button type="submit"
                                    class="w-full p-3 font-bold text-white rounded-lg shadow-xl bg-pr-400 hover:bg-black hover:shadow-none ">
                                    Order Now
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
                <!--   --------------------------------------------right --------------------------------------------  -->

                <div class="flex flex-col items-center justify-start md:w-1/3">
                    <div class="relative mx-3 mt-3 flex h-[200px] w-3/4   overflow-hidden rounded-xl shadow-lg">
                        <img class="object-cover w-full h-full" :src="'/' + car.data.image_url" alt="product image" />
                        <span
                            class="absolute top-0 left-0 w-24 h-8 px-2 py-1 m-2 text-sm font-medium text-center text-white rounded-full bg-pr-400">
                            {{ car.data.reduce }}
                            %
                            OFF</span>
                    </div>
                    <p class="hidden max-w-full mt-3 text-xl ms-4 font-car md:block">
                        {{ car.data.name[locale] }}
                    </p>
                    <div class="hidden mt-3 ms-4 md:block">
                        <div class="flex items-center">
                            <stars :number="parseInt(car.data.stars)" />

                        </div>
                    </div>

                    <!-- <div class="flex mt-6 me-16 ms-4">

                        <span class="text-lg text-third-600 font-car">Insurance: </span>
                        <p v-if="car.data.insurance" class="mx-2 text-sm text-third-700 font-car">
                            {{ car.data.insurance.type }}
                            from
                            {{ car.data.insurance.company }} Insurances</p>
                        <p v-else class="mx-3 text-red-600 text-md ">
                            Not asured !!!
                        </p>
                    </div> -->

                    <div class="w-full mt-8 ms-8">
                        <p id="duration" class="text-lg text-third-600 font-car ms-2">
                            {{ $t('destination') }}
                            <span
                                class="p-2 mx-2 font-medium border rounded-md text-third-700 font-car text-md border-pr-400 ">
                                {{ selectedDestination ? $t('destination.details', {
                                        from: selectedDestination.from.name[locale], to: selectedDestination.to.name[locale]
                                    }) : '--'
                                }}
                            </span>
                        </p>
                    </div>

                    <div class="w-full mt-8 ms-8">
                        <p id="total-price" class="text-lg text-third-600 font-car ms-2">
                            {{ $t('total_price') }}
                            <span
                                class="p-2 mx-2 font-medium border rounded-md text-third-700 font-car text-md border-pr-400 ">
                                {{ selectedDestination ? $t('price_amount', { amount: selectedDestination.amount }) :
                                '--' }}
                            </span>
                        </p>
                    </div>
                    <div id="mobile_submit_button" class="w-full mt-12 md:hidden ">
                        <button type="submit"
                            class="w-full p-3 font-bold text-white rounded-lg shadow-xl bg-pr-400 hover:bg-black hover:shadow-none ">Order
                            Now</button>
                    </div>
                </div>
            </div>
        </section>

    </SiteLayout>
</template>
