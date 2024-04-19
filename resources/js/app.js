import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import { createI18n } from 'vue-i18n';
import messages from './lang.js';
import axios from 'axios'

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

let intialLocale = localStorage.getItem('locale') ?? 'ar';

function setLocale(locale) {
    axios.get(route('change-locale', locale));

    i18n.global.locale = locale;
    localStorage.setItem('locale', locale);
    window.locale = locale;
    window.dir = locale == 'ar' ? 'rtl' : 'ltr';
    window.$i18n = i18n;
    return locale;
}


const i18n = createI18n({
    locale: intialLocale,
    fallbackLocale: 'ar',
    globalIngection: true,
    messages,
})

setLocale(intialLocale)

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(i18n)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
