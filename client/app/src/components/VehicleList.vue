<template>
    <div>
        <h2>Vehicle List</h2>
        <ul
            v-for="(item, index) in vehicles"
            :key="index"
        >
            <li class="text-black">
                {{ item.title }}
            </li>
        </ul>
    </div>
</template>

<script>
/* eslint-disable */
export default {
    computed: {
        vehicles() {
            return this.$store.getters.allVehicles
        }
    },
    mounted() {
        this.$store.dispatch('getVehicles') // 1. gọi tới getVehicles action trong store.js
    }
}
</script>
