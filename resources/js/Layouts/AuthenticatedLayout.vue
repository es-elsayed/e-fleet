<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import saIcon from '@/Icons/sa.vue';
import enIcon from '@/Icons/en.vue';
import { useLocale } from '@/Composable/useLocale';
import axios from 'axios'
import Alert from '@/Components/Alert.vue';


const showingNavigationDropdown = ref(false);
let { locale, dir } = useLocale()
const changeLocale = (lang) => {
        axios.get(route('change-locale', lang));
        localStorage.setItem('locale', lang);
        window.$i18n.global.locale = locale = window.locale = lang;
        dir = window.dir = lang == 'ar' ? 'rtl' : 'ltr';
    }
</script>

<template>
    <div :dir="dir">
        <div class="min-h-screen bg-third-100">
            <nav class="bg-white border-b border-third-100">
                <!-- Primary Navigation Menu -->
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="flex items-center shrink-0">
                                <Link :href="route('home')">
                                <ApplicationLogo class="block w-auto text-third-800 fill-current h-9" />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                    {{ $t('Dashboard') }}
                                </NavLink>
                            </div>
                        </div>
                        <!-- <div class="flex items-center justify-end w-full sm:sm-6">
                            <div class="relative ms-3">
                                <select @change="changeLocale" v-model="locale"
                                    class="block w-full text-sm text-third-900 border border-third-300 rounded-lg bg-third-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-third-700 dark:border-third-600 dark:placeholder-third-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="en" :selected="locale == 'en'">{{ $t('en') }}</option>
                                    <option value="ar" :selected="locale == 'ar'">{{ $t('ar') }}</option>
                                </select>
                            </div>
                        </div> -->
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <NavLink v-if="locale=='ar'" href="#" @click="changeLocale('en')" :title="$t('en')">
                                    <span class="inline-block w-6">
                                        <enIcon/>
                                    </span>
                                </NavLink>
                                <NavLink v-else href="#" @click="changeLocale('ar')" :title="$t('ar')">
                                    <span class="inline-block w-6">
                                        <saIcon/>
                                    </span>
                                </NavLink>
                            <!-- Settings Dropdown -->
                            <div class="relative ms-3">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-third-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-third-700 focus:outline-none">
                                                {{ $page.props.auth.user.name }}

                                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink :href="route('profile.edit')"> {{ $t('profile') }} </DropdownLink>
                                        <DropdownLink :href="route('logout')" method="post" as="button">
                                            {{ $t('logout') }}
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="flex items-center -me-2 sm:hidden">
                            <button @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 text-third-400 transition duration-150 ease-in-out rounded-md hover:text-third-500 hover:bg-third-100 focus:outline-none focus:bg-third-100 focus:text-third-500">
                                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{
        hidden: showingNavigationDropdown,
        'inline-flex': !showingNavigationDropdown,
    }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{
        hidden: !showingNavigationDropdown,
        'inline-flex': showingNavigationDropdown,
    }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                    class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            {{ $t('Dashboard') }}
                        </ResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-third-200">
                        <div class="px-4">
                            <div class="text-base font-medium text-third-800">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="text-sm font-medium text-third-500">{{ $page.props.auth.user.email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink :href="route('profile.edit')"> {{ $t('profile') }} </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                {{ $t('logout') }}
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>
            <Alert/>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
