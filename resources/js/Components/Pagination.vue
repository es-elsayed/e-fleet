<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({
    links: Array,
})

</script>
<template>
    <div class="flex justify-center w-full mb-12">
        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between ">
            <div class="flex flex-col items-center justify-center ">
                <div>
                    <span class="relative z-0 inline-flex rounded-md shadow-sm">
                        <template v-for="(link, key) in links">
                            <span v-if="link.url === null || link.active" :key="key"
                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 bg-white border border-gray-300 cursor-default text-pr-400"
                                v-html="link.label" />
                            <Link v-else :key="`link-${key}`" :href="link.url">
                            <span
                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 hover:text-pr-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700"
                                v-html="link.label" />
                            </Link>
                        </template>
                    </span>
                </div>
            </div>
        </nav>

    </div>
</template>
