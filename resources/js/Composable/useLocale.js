import { onMounted, ref,onBeforeUnmount } from 'vue';
import axios from 'axios'


export function useLocale() {
    let locale = ref('');
    let dir = ref('');

    onMounted(() => {
        dir.value = window.dir
        locale.value = window.locale
    });
    onBeforeUnmount(() => {
        dir.value = window.dir
        locale.value = window.locale
    });

    // const changeLocale = (lang) => {
    //     axios.get(route('change-locale', lang));
    //     localStorage.setItem('locale', lang);
    //     window.$i18n.global.locale = locale = window.locale = lang;
    //     dir = window.dir = lang == 'ar' ? 'rtl' : 'ltr';
    // }

    return {
        locale,
        dir,
        // changeLocale
    }
}
