<script setup>
import InputLabel from "@/Components/InputLabel.vue";
import { onMounted, computed } from "vue";
import { reactive, ref } from "@vue/reactivity";
import axios from "axios";
import SelectGroup from '@/Components/Form/SelectGroup.vue';

const props = defineProps({
    title: String,
    description: String,
    items: Object,
    searchCategory: String,
});
// onMounted(() => {
//     getLocations();
// });

const emit = defineEmits(["search"]);

// const locations = ref([]);

// const getLocations = () => {
//     axios.get("/locations/" + form.city).then((response) => {
//         locations.value = response.data;
//     });
// };


const form = reactive({
    brand_id: "",
    model: "",
    min_price: "0",
    max_price: "1000",
});

function search(options = {}) {
    // Update form based on the received key-value pairs
    Object.keys(options).forEach((key) => {
        if (form.hasOwnProperty(key)) {
            form[key] = options[key];
        }
    });

    axios.get(route('search'), {
        brand_id: form.brand_id,
        model: form.model,
        min_price: form.min_price,
        max_price: form.max_price,
    });
}


</script>

<template>
    <!-- <div class="container absolute inset-x-0 right-0 z-30 hidden max-w-4xl mx-auto md:block top-96"> -->
    <div class="container z-50 hidden max-w-6xl px-5 mx-auto mt-5 mb-3 xl:block font-Tajawal">
        <div class="px-3 py-2 bg-white border rounded-3xl">
            <div class="flex items-center justify-center">
                <div class="px-2 ml-2 rtl:border-l ltr:border-r xl:w-96">
                    <SelectGroup label="brand" v-model="form.brand_id" :items="$page.props.info.brands" />
                </div>

                <div class="px-2 ml-2 rtl:border-l ltr:border-r xl:w-96">
                    <SelectGroup label="model" v-model="form.model" :items="$page.props.info.models" />
                </div>
                <div class="px-2 ml-2 rtl:border-l ltr:border-r xl:w-96">
                    <SelectGroup label="min_price" v-model="form.min_price" :items="$page.props.info.min_price" />
                </div>
                <div class="px-2 ml-2 rtl:border-l ltr:border-r xl:w-96">
                    <SelectGroup label="max_price" v-model="form.max_price" :items="$page.props.info.max_price" />
                </div>

                <div class="mx-2">
                    <button
                        class="inline-flex items-center p-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-full bg-pr-400 hover:bg-pr-700 focus:bg-pr-700 active:bg-pr-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        @click="search()">
                        <svg class="w-5 h-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
                        </svg>
                        <!-- <span class="text-lg">إبحث</span> -->
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive search form  -->
    <div class="block px-5 pt-5 pb-4 xl:hidden font-Tajawal">
        <div class="container right-0 z-50 max-w-4xl mx-auto">
            <div class="px-3 py-5 bg-white rounded-2xl">
                <div class="flex-col items-center justify-center">
                    <div class="px-2 mb-3 xl:w-96">
                        <SelectGroup label="brand" v-model="form.brand_id" :items="$page.props.info.brands" />

                    </div>

                    <div class="px-2 mb-3 xl:w-96">
                        <SelectGroup label="model" v-model="form.model" :items="$page.props.info.models" />

                    </div>

                    <div class="px-2 mb-3 xl:w-96">
                        <SelectGroup label="min_price" v-model="form.min_price" :items="$page.props.info.min_price" />

                    </div>

                    <div class="px-2 mb-3 xl:w-96">
                        <SelectGroup label="max_price" v-model="form.max_price" :items="$page.props.info.max_price" />

                    </div>

                    <div class="mx-2">
                        <button @click="search()"
                            class="flex items-center justify-center w-32 p-2 font-bold text-white border-2 border-white rounded-md bg-pr-400 hover:bg-pr-500">
                            <svg class="w-5 h-5 ml-2 fill-white" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
                            </svg>
                            <span class="text-lg">
                                {{ $t('search') }}
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Responsive search form  -->

</template>
