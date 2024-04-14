<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';
import NavLink from '@/Components/NavLink.vue';

import saIcon from '@/Icons/sa.vue';
import enIcon from '@/Icons/en.vue';

let locale = ref('ar');
let dir = ref('rtl');

onMounted(() => {
    locale.value = window.locale
    dir.value = window.dir
});
const changeLocale = (lang) => {
// const changeLocale = (event) => {
    // let lang = event.target.value;
    localStorage.setItem('locale', lang);
    window.$i18n.global.locale = locale = window.locale = lang;
    dir = window.dir = lang == 'ar' ? 'rtl' : 'ltr';
}
</script>

<template>
    <div :dir="dir" class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="flex items-center justify-end w-full sm:sm-6">

            <div class="fixed top-10 right-3 z-10 px-4 sm:px-6 lg:px-8">
                <!-- <div class="flex justify-between h-16">
                    <div class="relative">
                        <select @change="changeLocale" v-model="locale"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700
                                    dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="en" :selected="locale == 'en'">{{ $t('en') }}</option>
                            <option value="ar" :selected="locale == 'ar'">{{ $t('ar') }}</option>
                        </select>
                    </div>
                </div> -->
                <NavLink v-if="locale=='ar'" href="#" @click="changeLocale('en')" :title="$t('en')">
                                <span class="inline-block w-8">
                                    <enIcon/>
                                </span>
                            </NavLink>
                            <NavLink v-else href="#" @click="changeLocale('ar')" :title="$t('ar')">
                                <span class="inline-block w-8">
                                    <saIcon/>
                                </span>
                            </NavLink>
            </div>

        </div>
        <div>
            <Link href="/">
            <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
            </Link>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
