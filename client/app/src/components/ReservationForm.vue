<template>
    <div class="ReservationForm p-5 bg-white w-1/2">
        <InputSelect
            :label="'pls select'"
            :options="locations"
        />
    </div>
</template>

<script>
/* eslint-disable */
import InputSelect from '@/components/forms/InputSelect'

export default {
    components: {
        InputSelect
    },
    computed: {
        locations() {
            return this.$store.getters.allLocations
        }
    }
}
</script>
