<script setup>
import {ref} from "vue";
import OfferModal from "@/Components/Application/OfferModal.vue";

defineProps({
    offer: Object,
})

const showOfferModal = ref(false);
const showOfferData = ref();


const closeModal = () => {
    showOfferModal.value = false;
};


const openModal = (offer) => {
    showOfferModal.value = true;
    showOfferData.value = offer;
};

</script>

<template>
    <div
        class="relative flex flex-col justify-start rounded-lg w-44 text-center cursor-pointer border border-gray-400 bg-white">
        <div class="absolute inset-0 bg-gradient-to-b from-gray-800 to-transparent opacity-5 rounded-lg"></div>
        <div class="mt-12 px-3 mb-2 font-bold text-base leading-5">
            20% off
        </div>
        <div class="text-sm font-normal mb-3 text-gray-500">
            Min. order - 699
        </div>
        <div class="absolute bottom-0 left-0 w-full">
            <div class="border-t border-gray-400 text-sm font-bold pt-2 text-gray-400">
                Know more
            </div>
        </div>
    </div>
    <OfferModal v-if="showOfferData" :offer="showOfferData" :show="showOfferModal" @close="closeModal"/>
</template>

<style scoped>

</style>
