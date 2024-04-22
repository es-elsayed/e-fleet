<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';
import NavLink from '@/Components/NavLink.vue';

import saIcon from '@/Icons/sa.vue';
import enIcon from '@/Icons/en.vue';
import { useLocale } from '@/Composable/useLocale';
import axios from 'axios'
import Alert from '@/Components/Alert.vue';


let { locale, dir, } = useLocale()
const changeLocale = (lang) => {
        axios.get(route('change-locale', lang));
        localStorage.setItem('locale', lang);
        window.$i18n.global.locale = locale = window.locale = lang;
        dir = window.dir = lang == 'ar' ? 'rtl' : 'ltr';
    }
</script>

<template>
    <div :dir="dir" class="flex flex-col items-center min-h-screen pt-6 bg-third-100 sm:justify-center sm:pt-0">
        <div class="flex items-center justify-end w-full sm:sm-6">

            <div class="fixed z-10 px-4 top-10 right-3 sm:px-6 lg:px-8">
                <!-- <div class="flex justify-between h-16">
                    <div class="relative">
                        <select @change="changeLocale" v-model="locale"
                            class="block w-full text-sm text-third-900 border border-third-300 rounded-lg bg-third-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-third-700 dark:border-third-600 dark:placeholder-third-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
            <ApplicationLogo class="w-20 h-20 text-third-500 fill-current" />
            </Link>
        </div>
        <Alert/>
        <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
