<script setup>
import {useTableCellClasses} from '@/Components/Table/useTableCellClasses.js'

const {tableCellClasses} = useTableCellClasses()
</script>

<template>
    <td :class="tableCellClasses">
        <slot></slot>
    </td>
</template>
