<script setup>
import {ref} from "vue";
import ProductDetailModal from "@/Components/Application/ProductDetailModal.vue";
import CartButton from "@/Components/Application/CartButton.vue";

defineProps({
    product: Object
})

const showProductModal = ref(false);
const showProductData = ref();

const openProductModal = (product) => {
    showProductModal.value = true;
    showProductData.value = product;
};

const closeProductModal = () => {
    showProductModal.value = false;
};

</script>

<template>
    <div class="mt-3 cursor-pointer flex justify-between rounded border bg-white p-5 hover:bg-gray-50" title="">
        <div class="flex-1 space-y-2 pr-3 mb-3" @click="openProductModal(product)">
            <h3 class="font-semibold">{{ product.title }}</h3>
            <span class="text-sm">
                                                &#165; {{
                    product.selling_price.toLocaleString($page.props.numberFormat)
                }}
                                                <del class="text-xs text-gray-500"> &#165; {{
                                                        product.market_price
                                                    }}</del>
                                            </span>
            <p class="text-xs text-gray-500">{{ product.description }}</p>
        </div>
        <div class="text-center relative h-28">
            <img
                v-lazy="{ src: product.image ? product.image : $page.props.blankImage, loading: $page.props.blankImage, error: $page.props.blankImage }"
                :alt="product.image" alt="Food"
                class="h-28 w-28 rounded-lg object-cover"/>
            <CartButton :product="product"/>
        </div>
    </div>

    <ProductDetailModal v-if="showProductData" :product="showProductData" :show="showProductModal"
                        @close="closeProductModal"/>
</template>

<style scoped>

</style>
