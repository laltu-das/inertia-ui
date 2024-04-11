<script setup>
import {onMounted, onUnmounted, watch} from 'vue';
import {useCartStore} from "@/Stores/CartStore.js";
import CartButton from "@/Components/Application/CartButton.vue";

const props = defineProps({
    product: {
        type: Object,
        default: true,
    },
    show: {
        type: Boolean,
        default: false,
    },
    closeable: {
        type: Boolean,
        default: true,
    },
});

const emit = defineEmits(['close']);

watch(
    () => props.show,
    () => {
        if (props.show) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = null;
        }
    }
);

const close = () => {
    if (props.closeable) {
        emit('close');
    }
};

const closeOnEscape = (e) => {
    if (e.key === 'Escape' && props.show) {
        close();
    }
};

onMounted(() => document.addEventListener('keydown', closeOnEscape));

onUnmounted(() => {
    document.removeEventListener('keydown', closeOnEscape);
    document.body.style.overflow = null;
});

const cartStore = useCartStore();

</script>

<template>
    <teleport to="body">
        <transition leave-active-class="duration-200">
            <div v-show="show" class="fixed bottom-0 inset-0 overflow-y-auto z-50" scroll-region>
                <transition
                    enter-active-class="ease-out duration-300"
                    enter-from-class="opacity-0"
                    enter-to-class="opacity-100"
                    leave-active-class="ease-in duration-200"
                    leave-from-class="opacity-100"
                    leave-to-class="opacity-0"
                >
                    <div v-show="show" class="fixed inset-0 transform transition-all" @click="close">
                        <div class="absolute inset-0 bg-gray-500 dark:bg-gray-900 opacity-75"/>
                    </div>
                </transition>

                <transition
                    enter-active-class="ease-out duration-300"
                    enter-from-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    enter-to-class="opacity-100 translate-y-0 sm:scale-100"
                    leave-active-class="ease-in duration-200"
                    leave-from-class="opacity-100 translate-y-0 sm:scale-100"
                    leave-to-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                >
                    <div v-show="show"
                         class="bg-white dark:bg-gray-800 rounded-t-xl overflow-hidden shadow-xl transform transition-all bottom-0 w-full absolute">
                        <div class="flex p-5 gap-5">
                            <div>
                                <img :src="product.image" alt="" class="object-cover rounded-md h-full md:h-full w-40"/>
                                <CartButton :product="product"/>
                            </div>
                            <div class="w-full">
                                <p class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ product.title }}
                                </p>
                                <p class="font-normal text-gray-700 dark:text-gray-400">
                                    {{ product.description }}
                                </p>
                                <p class="font-bold">Nutritional information :</p>
                                <div class="grid grid-cols-4 gap-2">
                                    <div v-for="nutritional_information in product.nutritional_informations"
                                         class="bg-white rounded-md shadow text-center">
                                        <p class="font-normal text-gray-700 dark:text-gray-400">
                                            {{ nutritional_information.item }}
                                        </p>
                                        <p class="font-normal text-gray-700 dark:text-gray-400">
                                            {{ nutritional_information.value }}
                                        </p>
                                    </div>
                                </div>
                                <p class="font-bold">Ingredients :</p>
                                <div v-for="ingredient in product.ingredients">
                                    <p class="font-normal text-gray-700 dark:text-gray-400">
                                        {{ ingredient }}
                                    </p>
                                </div>
                                <p class="">Price: &#x20B9; {{ product.market_price }}
                                    <del class="text-gray-500">&#x20B9; {{ product.selling_price }}</del>
                                </p>
                            </div>
                        </div>

                    </div>
                </transition>
            </div>
        </transition>
    </teleport>
</template>
