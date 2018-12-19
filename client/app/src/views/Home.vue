<template>
  <div class="home">
    <div class="HeroBlock bg-grey h-screen">
      <div class="container flex justify-center items-center h-screen">
        <reservation-form/>
      </div>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src

import customButton from '@/components/Button'
import vehicleList from '@/components/VehicleList'
import reservationForm from '@/components/ReservationForm'

export default {
  name: 'home',
  components:{
    customButton,
    vehicleList,
    reservationForm
  }
}
</script>
