<script setup>
import {defineProps} from 'vue';
import {useCartStore} from "@/Stores/CartStore.js";
import {Link} from '@inertiajs/vue3';

const props = defineProps({
    cartRouteName: {
        type: String,
        required: true
    },
    cartComponentName: {
        type: String,
        required: true
    },
});

const cartStore = useCartStore();
</script>


<template>
    <div
        v-if="$page.component !== cartComponentName && cartStore.items.length > 0 && route().current() !=='qr-menu.welcome'"
        class="fixed inset-x-0 bottom-0 mx-auto flex items-center justify-between bg-orange-600 p-5 text-sm text-white">
        <div>
            <h4 class="font-semibold tracking-wide">
                {{ cartStore.totalItems }} Items | Total :
                <span>&#165; {{ cartStore.totalCost.toLocaleString($page.props.numberFormat) }}</span>
            </h4>
            <Link :href="route(cartRouteName)" class="mt-1 text-xs text-gray-200">
                View Cart Items
            </Link>
        </div>
        <div class="text-sm">
            <Link :href="route(cartRouteName)"
                  class="rounded bg-gray-800 px-4 py-2 text-xs font-medium text-white hover:bg-gray-900">
                View Cart
                <svg class="ml-2 inline-flex" height="1.2em" viewBox="0 0 24 24" width="1.2em">
                    <path d="M4 11v2h12l-5.5 5.5l1.42 1.42L19.84 12l-7.92-7.92L10.5 5.5L16 11H4Z"
                          fill="currentColor"></path>
                </svg>
            </Link>
        </div>
    </div>
    <!--    <div class="fixed inset-x-0 bottom-0 mx-auto flex items-center justify-between bg-orange-600 p-5 text-sm text-white">-->
    <!--        This store is closed currently-->
    <!--    </div>-->
</template>

