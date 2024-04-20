<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import saIcon from '@/Icons/sa.vue';
import enIcon from '@/Icons/en.vue';
import { Link } from '@inertiajs/vue3';
import {  ref } from 'vue';
import { useLocale } from '@/Composable/useLocale';
import axios from 'axios'

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
        <div class="min-h-screen bg-gray-100">
            <nav class="sticky top-0 z-50 w-full px-4 py-2 border-gray-200 bg-sec-600 lg:px-6 dark:bg-gray-800 ">
                <!-- Primary Navigation Menu -->
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <!-- <div class="flex w-full"> -->
                        <!-- Logo -->
                        <div class="flex items-center md:w-full">
                            <Link :href="route('dashboard')">
                            <ApplicationLogo class="block w-auto text-gray-800 fill-current h-9" />
                            </Link>
                        </div>

                        <!-- Navigation Links -->
                        <div
                            class="justify-center hidden w-full font-bold sm:-my-px sm:ms-10 lg:flex whitespace-nowrap">
                            <!-- <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex whitespace-nowrap"> -->
                            <NavLink class="mx-4" :href="route('home')" :active="route().current('home')">
                                {{ $t('home') }}
                            </NavLink>
                            <NavLink class="mx-4" :href="route('dashboard')" :active="route().current('dashboard')">
                                {{ $t('cars') }}
                            </NavLink>
                            <NavLink class="mx-4" :href="route('dashboard')" :active="route().current('dashboard')">
                                {{ $t('location') }}
                            </NavLink>
                            <NavLink class="mx-4" :href="route('site.contact_us.create')"
                                :active="route().current('site.contact_us.create')">
                                {{ $t('contact_us') }}
                            </NavLink>
                            <NavLink class="mx-4" v-if="locale == 'ar'" href="#" @click="changeLocale('en')"
                                :title="$t('en')">
                                <span class="inline-block w-6">
                                    <enIcon />
                                </span>
                            </NavLink>
                            <NavLink class="mx-4" v-else href="#" @click="changeLocale('ar')" :title="$t('ar')">
                                <span class="inline-block w-6">
                                    <saIcon />
                                </span>
                            </NavLink>
                            <!-- <div class="flex items-center sm:sm-6">

                            <div class="relative ms-3">
                                <select @change="changeLocale" v-model="locale"
                                    class="block w-full text-sm border rounded-lg bg-sec-50 border-sec-300 text-sec-900 focus:ring-pr-500 focus:border-pr-500 dark:bg-sec-700 dark:border-sec-600 dark:placeholder-sec-400 dark:text-white dark:focus:ring-pr-500 dark:focus:border-pr-500">
                                    <option value="en" :selected="locale == 'en'">{{ $t('en') }}</option>
                                    <option value="ar" :selected="locale == 'ar'">{{ $t('ar') }}</option>
                                </select>
                            </div>
                            </div> -->
                        </div>
                        <!-- </div> -->
                        <div class="flex items-center justify-end w-full sm:sm-6">

                            <div class="flex items-center justify-end w-full whitespace-nowrap sm:sm-6 rtl:text-sm">
                                <Link :href="route('login')"
                                    class="px-4 lg:px-5 py-2 lg:py-2.5 mx-2 text-white bg-gradient-to-br from-pr-400 to-pr-300 hover:bg-gradient-to-bl font-medium rounded-lg text-sm">
                                {{ $t('login') }}
                                </Link>
                                <!-- class="inline-block mx-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> -->

                                <!-- class="inline-block mx-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> -->
                                <Link :href="route('register')"
                                    class="mx-2 relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 ">
                                <span
                                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-sec-600 dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    {{ $t('register') }}
                                </span>
                                </Link>
                            </div>
                        </div>
                        <div v-if="$page.props.auth.user" class="hidden sm:flex sm:items-center sm:ms-6">
                            <!-- Settings Dropdown -->
                            <div class="relative ms-3">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
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
                        <div class="flex items-center -me-2 lg:hidden">
                            <button @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
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
                    class="lg:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            {{ $t('Dashboard') }}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('dashboard')"
                            :active="route().current('dashboard')">
                            {{ $t('cars') }}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('dashboard')"
                            :active="route().current('dashboard')">
                            {{ $t('location') }}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('site.contact_us.create')"
                            :active="route().current('site.contact_us.create')">
                            {{ $t('contact_us') }}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink v-if="locale == 'ar'" href="#" @click="changeLocale('en')"
                            :title="$t('en')">
                            <span class="inline-block w-6">
                                <enIcon />
                            </span>
                        </ResponsiveNavLink>
                        <ResponsiveNavLink v-else href="#" @click="changeLocale('ar')" :title="$t('ar')">
                            <span class="inline-block w-6">
                                <saIcon />
                            </span>
                        </ResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div v-if="$page.props.auth.user" class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="text-base font-medium text-gray-800">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="text-sm font-medium text-gray-500">{{ $page.props.auth.user.email }}</div>
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

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
