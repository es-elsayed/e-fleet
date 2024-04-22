<script setup>
import SiteLayout from '@/Layouts/SiteLayout.vue';
import InputGroup from '@/Components/Form/InputGroup.vue';
import SelectGroup from '@/Components/Form/SelectGroup.vue';
import TextareaGroup from '@/Components/Form/TextareaGroup.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { useLocale } from '@/Composable/useLocale.js';
const { locale } = useLocale()

const props = defineProps({
    item: {
        type: Object,
        default: ({})
    },
    subjectTypes: {
        type: Array,
        default: ([])
    },
});



const form = useForm({
    first_name: props.item.first_name ?? "",
    last_name: props.item.last_name ?? "",
    email: props.item.email ?? "",
    subject: props.item.subject ?? "",
    phone: props.item.phone ?? "",
    message: props.item.message ?? "",
});

const submit = () => {
    form.post(route("site.contact_us.store"), {
        onSuccess: () => form.reset(),
        // onFinish: () => form.reset(),
    });
};

</script>

<template>

    <Head :title="$t('contact_us')" />

    <SiteLayout>

        <div class="mt-16">
            <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-center text-third-900 font-car">
                {{ $t('contact_us') }}
            </h2>
            <p class="mb-8 font-light text-center text-third-500 font-car lg:mb-16 dark:text-third-400 sm:text-xl">
                {{ $t('contact_desc') }}
            </p>
        </div>
        <div class="flex flex-col justify-between max-w-screen-xl gap-12 px-8 mx-auto lg:flex-row lg:px-16 ">
            <div class="order-last mb-12 lg:w-1/2 lg:order-first ">
                <form @submit.prevent="submit" class="mt-6 space-y-6">
                    <div class="grid grid-cols-2 gap-6">
                        <InputGroup v-model="form.first_name" id="first_name" label="first_name"
                            :placeholder="$t('first_name_placeholder')" :error-message="form.errors.first_name" />
                        <InputGroup v-model="form.last_name" id="last_name" label="last_name"
                            :placeholder="$t('last_name_placeholder')" :error-message="form.errors.last_name" />

                        <InputGroup type="email" v-model="form.email" id="email" label="email"
                            placeholder="johndoe@gmail.com" :error-message="form.errors.email" />

                        <InputGroup v-model="form.phone" id="phone" label="phone" :placeholder="$t('phone_placeholder')"
                            :error-message="form.errors.phone" />

                        <SelectGroup label="subject" v-model="form.subject" :items="subjectTypes"
                            :error-message="form.errors.subject" />

                        <TextareaGroup gClass="sm:col-span-2" v-model="form.message" id="message"
                            placeholder="leave_message" label="message" :error-message="form.errors.message" />

                        <button type="submit"
                            class="p-3 mb-16 font-bold border rounded-md border-pr-400 text-pr-400 hover:text-white hover:bg-pr-400">
                            {{ $t('send_message') }}</button>
                    </div>
                </form>
            </div>
            <div class="grid gap-4 mx-auto text-center ">
                <div>
                    <div class="w-20 p-6 mx-auto mb-3 bg-third-200 rounded-md ">
                        <svg style="fill: #60646c" id="o" xmlns="http://www.w3.org/2000/svg" height="2em"
                            viewBox="0 0 512 512">
                            <path
                                d="M0 32C0 14.3 14.3 0 32 0H480c17.7 0 32 14.3 32 32s-14.3 32-32 32V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H304V464c0-26.5-21.5-48-48-48s-48 21.5-48 48v48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64C14.3 64 0 49.7 0 32zm96 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16zM240 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H240zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16zM112 192c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H112zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H240c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H368zM328 384c13.3 0 24.3-10.9 21-23.8c-10.6-41.5-48.2-72.2-93-72.2s-82.5 30.7-93 72.2c-3.3 12.8 7.8 23.8 21 23.8H328z" />
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-third-800 font-car">{{ $t('company_info') }}</h2>
                    <p class="text-sm font-light text-third-700 font-car">{{ $page.props.about.info[locale] }}
                    </p>
                </div>
                <div>
                    <div class="w-20 p-6 mx-auto mb-3 bg-third-200 rounded-md ">
                        <svg style="fill: #60646c" id="o" xmlns="http://www.w3.org/2000/svg" height="2em"
                            viewBox="0 0 512 512">
                            <path
                                d="M0 32C0 14.3 14.3 0 32 0H480c17.7 0 32 14.3 32 32s-14.3 32-32 32V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H304V464c0-26.5-21.5-48-48-48s-48 21.5-48 48v48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64C14.3 64 0 49.7 0 32zm96 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16zM240 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H240zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16zM112 192c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H112zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H240c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H368zM328 384c13.3 0 24.3-10.9 21-23.8c-10.6-41.5-48.2-72.2-93-72.2s-82.5 30.7-93 72.2c-3.3 12.8 7.8 23.8 21 23.8H328z" />
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-third-800 font-car">{{ $t('company_address') }}</h2>
                    <p class="text-sm font-light text-third-700 font-car">
                        {{ $page.props.about.address[locale] }}
                    </p>

                </div>
                <div>
                    <div class="w-20 p-6 mx-auto mb-3 bg-third-200 rounded-md ">
                        <svg style="fill: #60646c" id="o" xmlns="http://www.w3.org/2000/svg" height="2em"
                            viewBox="0 0 512 512">
                            <path
                                d="M0 32C0 14.3 14.3 0 32 0H480c17.7 0 32 14.3 32 32s-14.3 32-32 32V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H304V464c0-26.5-21.5-48-48-48s-48 21.5-48 48v48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64C14.3 64 0 49.7 0 32zm96 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16zM240 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H240zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16zM112 192c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H112zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H240c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H368zM328 384c13.3 0 24.3-10.9 21-23.8c-10.6-41.5-48.2-72.2-93-72.2s-82.5 30.7-93 72.2c-3.3 12.8 7.8 23.8 21 23.8H328z" />
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-third-800 font-car">{{ $t('call_us') }}</h2>
                    <p class="text-sm font-light text-third-700 font-car">
                        {{ $t('call_us_desc') }}
                    </p>
                    <p class="font-car text-pr-400 ">{{ $page.props.about.phone[locale] }}</p>
                </div>
                <hr class="my-6 border-third-700 sm:mx-auto lg:my-8 lg:hidden" />
            </div>

        </div>

    </SiteLayout>
</template>
