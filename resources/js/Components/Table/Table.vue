<script setup>
import Th from "./Th.vue";
import Tr from "./Tr.vue";
import Td from "./Td.vue";
import { Link } from '@inertiajs/vue3';

defineProps({
    headers: {
        type: Array,
        default: () => []
    },
    items: {
        type: Object,
        default: () => ({})
    },
})
</script>
<template>
    <div>
        <table class="min-w-full my-6">

            <thead>
                <Th v-for="header in headers" :key="header.lable">{{ header.destination[locale] }}</Th>

            </thead>

            <tbody class="bg-white">
                <Tr v-if="items.data.length === 0">
                    <Td :colspan="headers.length">
                        No Data Available
                    </Td>
                </Tr>
                <Tr v-else v-for="item in items.data" :key="item.id">
                    <slot :item="item" />
                </Tr>
            </tbody>

        </table>
       
    </div>
</template>
