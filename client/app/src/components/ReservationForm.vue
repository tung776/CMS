<template>
    <div class="ReservationForm p-5 bg-white w-1/2">
        <InputSelect :label ="'pls select'" :options="[
            {
                label: 'Việt nam',
                value: 1
            },
            {
                label: 'Mỹ',
                value: 2
            }
        ]"/>
    </div>
</template>

<script>
import InputSelect from '@/components/forms/InputSelect'

export default {
    components: {
        InputSelect
    }
}
</script>