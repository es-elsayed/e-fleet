<script setup>
import { computed, onMounted, ref } from "vue";
import { useLocale } from '@/Composable/useLocale';

let { locale } = useLocale()


const props = defineProps({
    modelValue: {},
    items: Array,
    itemText: {
        type: String,
        default: "name",
    },
    placeholder: {
        type: String,
        default: "Select Option",
    },
    itemValue: {
        type: String,
        default: "id",
    },
    withoutSelect: {
        type: Boolean,
        default: false,
    },
    handleTranslate: {
        type: Boolean,
        default: false,
    },
});

defineEmits(["update:modelValue"]);

const options = computed(() => {
    if (props.withoutSelect) return props.items;

    return [
        { [props.itemText]: props.placeholder, [props.itemValue]: "" }, ...getTranslatedNames(props.items),
    ];
});

const select = ref(null);

onMounted(() => {
    if (select.value.hasAttribute("autofocus")) {
        select.value.focus();
    }
});

let translatedData = ref({});

const getTranslatedNames = (items) => {
    translatedData.value = items;
    if (props.handleTranslate) {
        translatedData.value = items.map(item => {
            return {
                id: item.id,
                name: item.name[locale.value]
            };
        });
    }
    return translatedData.value;
};

</script>

<template>
    <select :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="select"
        class="block w-full rounded-md shadow-sm border-third-300 focus:border-pr-300 focus:ring focus:ring-pr-200 focus:ring-opacity-50">
        <option v-for="item in options" :key="item[itemValue]" :value="item[itemValue]">
            {{ handleTranslate ? item[itemText] : $t(item[itemText]) }}
        </option>
    </select>
</template>
