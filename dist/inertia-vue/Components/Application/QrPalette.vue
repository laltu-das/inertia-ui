<script setup>
defineProps({
    value: {
        type: String,
    },
});

</script>

<template>
    <img :src="value"/>
</template>

<style scoped>

</style>
