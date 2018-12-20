<template>
    <div class="home">
        <div class="HeroBlock bg-grey h-screen">
            <div class="container flex justify-center items-center h-screen">
                <reservationForm />
            </div>
        </div>
    </div>
</template>

<script>
// @ is an alias to /src
/* eslint-disable */

import customButton from '@/components/Button'
import vehicleList from '@/components/VehicleList'
import reservationForm from '@/components/ReservationForm'

export default {
    name: 'Home',
    components: {
        reservationForm
    }
}
</script>
