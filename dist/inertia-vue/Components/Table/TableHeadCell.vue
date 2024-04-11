<script setup>
import {useTableHeadCellClasses} from '@/Components/Table/useTableHeadCellClasses.js'

const {tableHeadCellClasses} = useTableHeadCellClasses()
</script>
<template>
    <th :class="tableHeadCellClasses" scope="col">
        <slot></slot>
    </th>
</template>
