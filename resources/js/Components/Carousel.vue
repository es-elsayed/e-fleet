<script setup>
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
import 'vue3-carousel/dist/carousel.css'
import { useMediaQuery } from "@vueuse/core";
import { computed, defineProps, defineComponent } from "vue";

defineComponent({
    Carousel,
    Slide,
    Pagination,
    Navigation,
});

const props = defineProps({
    items: Object,
    navigation: {
        type: Boolean,
        default: 0,
    },
    pagination: {
        type: Boolean,
        default: 0,
    },
    numInLg: {
        type: Number,
        default: 3
    },
    numInMd: {
        type: Number,
        default: 2
    },
    numInSm: {
        type: Number,
        default: 1
    },
    autoplay: {
        type: Number,
        default: 2000
    },
    navClasses: {
        type: String,
        required: false,
    },
    navPosition: {
        type: String,
        default: '',
        validator: (value) => {
            return ['out', 'in'].includes(value);
        },
    },
});

const screenSizeLookup = {
    lg: "(min-width: 1024px)",
    md: "(min-width: 641px)",
};

const isLargeScreen = useMediaQuery(screenSizeLookup.lg);
const isMediumScreen = useMediaQuery(screenSizeLookup.md);

const perPage = computed(() => {
    if (isLargeScreen.value) {
        return props.numInLg;
    } else if (isMediumScreen.value) {
        return props.numInMd;
    } else {
        return props.numInSm;
    }
});

const navigationPosition = computed(() => {
    const navMap = {
        'out': 'out',
        'in': 'in'
    };
    return navMap[props.navPosition] || '';
});
const navClass = `${props.navClasses} ${navigationPosition.value}`;
</script>

<template>
    <carousel dir="rtl" :items-to-show="perPage" :items-to-scroll="perPage" :autoplay="autoplay" :transition="1000"
        v-bind="$attrs">
        <Slide v-for="item in items" :key="item">
            <slot :item="item" />
        </Slide>
        <template v-if="navigation || pagination" #addons>
            <navigation :class="navClass" v-if="navigation" />
            <pagination v-if="pagination" />
        </template>
    </carousel>

</template>
<style>
.carousel__next,
.carousel__prev {
    color: white;
    width: 2.5rem;
    height: 2.5rem;
}

.out {
    background: #60a5fa;
    border-radius: 50%;
}

.out.carousel__next {
    left: -6rem !important;
}

.out.carousel__prev {
    right: -6rem !important;
}

.in.carousel__next {
    left: 4rem !important;
}

.in.carousel__prev {
    right: 4rem !important;
}

@media (max-width: 1400px) {
    .carousel__next,
    .carousel__prev {
        display: none !important;
    }
}
</style>
