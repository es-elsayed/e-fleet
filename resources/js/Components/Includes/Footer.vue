<script setup>
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import WhatsappIcon from '@/Icons/whatsapp.vue';
import { useLocale } from '@/Composable/useLocale';
let { locale, dir } = useLocale()

</script>
<template>
    <footer class="px-4 bg-third-900 sm:p-6">
        <div class="relative max-w-screen-xl pt-10 mx-auto ">
            <div class="text-center lg:flex lg:justify-between lg:text-start">

                <div class="w-full mb-6 rtl:lg:ml-8 ltr:lg:mr-8">
                    <div class="align-middle">
                        <span class="inline-block w-8">
                            <application-logo />
                        </span>
                        &nbsp;
                        <h2 class="inline-block mb-6 text-2xl font-semibold text-white uppercase align-middle">
                            {{ $page.props.about.name[locale] }}
                        </h2>
                    </div>
                    <p class="mt-4 text-third-400 lg:text-justify">
                        {{ $page.props.about.description[locale] }}
                    </p>
                </div>
                <div class="w-full mb-6 rtl:lg:ml-8 ltr:lg:mr-8">
                    <h2 class="inline-block mb-6 text-2xl font-semibold text-white uppercase align-middle">
                        {{ $t('follow_us.title') }}
                    </h2>
                    <ul class="text-third-400">
                        <li class="mb-2">
                            <a :title="$t('follow_us.links.facebook')" v-if="$page.props.settings.follow_us.facebook"
                                :href="$page.props.settings.follow_us.facebook" class="hover:underline "
                                target='_blank'>
                                {{ $t('follow_us.links.facebook') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a :title="$t('follow_us.links.whatsapp')" v-if="$page.props.settings.follow_us.whatsapp"
                                :href="$page.props.settings.follow_us.whatsapp" class="hover:underline "
                                target='_blank'>
                                {{ $t('follow_us.links.whatsapp') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a :title="$t('follow_us.links.github')" v-if="$page.props.settings.follow_us.github"
                                :href="$page.props.settings.follow_us.github" class="hover:underline " target='_blank'>
                                {{ $t('follow_us.links.github') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a :title="$t('follow_us.links.x')" v-if="$page.props.settings.follow_us.x"
                                :href="$page.props.settings.follow_us.x" class="hover:underline" target='_blank'>
                                {{ $t('follow_us.links.x') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a :title="$t('follow_us.links.linkedin')" v-if="$page.props.settings.follow_us.linkedin"
                                :href="$page.props.settings.follow_us.linkedin" class="hover:underline" target='_blank'>
                                {{ $t('follow_us.links.linkedin') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a :title="$t('follow_us.links.instagram')" v-if="$page.props.settings.follow_us.instagram"
                                :href="$page.props.settings.follow_us.instagram" class="hover:underline"
                                target='_blank'>
                                {{ $t('follow_us.links.instagram') }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-full mb-6 rtl:lg:ml-8 ltr:lg:mr-8">
                    <h2 class="inline-block mb-6 text-2xl font-semibold text-white uppercase align-middle">Legal
                    </h2>
                    <ul class="text-third-400 ">
                        <li class="mb-4">
                            <a href="{{route('privacy_policy')}}" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="{{route('terms_conditions')}}" class="hover:underline">Terms &amp;
                                Conditions</a>
                        </li>
                    </ul>
                </div>

            </div>

            <hr class="border-third-700 sm:mx-auto lg:mb-8" />

            <div class="flex flex-col items-center justify-between py-8 space-y-4 text-white lg:flex-row">
                <div class="flex mt-4 sm:justify-center lg:text-center sm:mt-0">
                    <a :title="$t('follow_us.links.facebook')" v-if="$page.props.settings.follow_us.facebook"
                        :href="$page.props.settings.follow_us.facebook" target='_blank'
                        class="mx-2 text-third-500 hover:text-white">
                        <svg class="w-5 h-5 lg:w-8 lg:h-8 fill-pr-500" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                            </path>
                        </svg>
                    </a>
                    <a :title="$t('follow_us.links.whatsapp')" v-if="$page.props.settings.follow_us.whatsapp"
                        :href="$page.props.settings.follow_us.whatsapp" target='_blank'
                        class="mx-2 text-third-500 hover:text-white">
                        <whatsapp-icon class="fill-pr-600" />
                    </a>
                    <a :title="$t('follow_us.links.github')" v-if="$page.props.settings.follow_us.github"
                        :href="$page.props.settings.follow_us.github" target='_blank'
                        class="mx-2 text-third-500 hover:text-white">
                        <svg class="w-5 h-5 lg:w-8 lg:h-8 fill-pr-500" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a :title="$t('follow_us.links.x')" v-if="$page.props.settings.follow_us.x"
                        :href="$page.props.settings.follow_us.x" target='_blank'
                        class="mx-2 text-third-500 hover:text-white">
                        <svg class="w-5 h-5 lg:w-8 lg:h-8 fill-pr-500" xmlns="http://www.w3.org/2000/svg"
                            shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                            image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                            viewBox="0 0 512 462.799">
                            <path fill-rule="nonzero"
                                d="M403.229 0h78.506L310.219 196.04 512 462.799H354.002L230.261 301.007 88.669 462.799h-78.56l183.455-209.683L0 0h161.999l111.856 147.88L403.229 0zm-27.556 415.805h43.505L138.363 44.527h-46.68l283.99 371.278z" />
                        </svg>
                    </a>
                    <a :title="$t('follow_us.links.linkedin')" v-if="$page.props.settings.follow_us.linkedin"
                        :href="$page.props.settings.follow_us.linkedin" target='_blank'
                        class="mx-2 text-third-500 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"
                            class="w-5 h-5 lg:w-8 lg:h-8 fill-pr-500">
                            <path
                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                        </svg>
                    </a>
                    <a :title="$t('follow_us.links.instagram')" v-if="$page.props.settings.follow_us.instagram"
                        :href="$page.props.settings.follow_us.instagram" target='_blank'
                        class="mx-2 text-third-500 hover:text-white">
                        <svg class="w-5 h-5 lg:w-8 lg:h-8 fill-pr-500" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>


                </div>
                <div class="text-sm text-third-400 lg:text-center md:ms-0 sm:mt-0">
                    {{ $t('all_rights_reserved') }}
                    <a href="https://portfolio.eslamco.com" target='_blank' class="hover:underline text-pr-500">
                        {{ $page.props.about.name[locale] }} © 2024
                    </a>
                </div>
                <div class="text-sm text-third-400 lg:text-center md:ms-0 sm:mt-0">
                    {{ $t('developed_by') }}
                    <a href="https://portfolio.eslamco.com" target='_blank' class="hover:underline text-pr-500">
                        Eslamco
                    </a>
                </div>
            </div>
        </div>

    </footer>
</template>
