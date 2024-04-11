<script setup>
import {useTableRowClasses} from '@/Components/Table/useTableRowClasses.js'

const {tableRowClasses} = useTableRowClasses()
</script>

<template>
    <tr :class="tableRowClasses">
        <slot></slot>
    </tr>
</template>
