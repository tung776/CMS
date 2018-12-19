<template>
  <div class="home">
    <customButton dark></customButton>
    <vehicle-list />
  </div>
</template>

<script>
// @ is an alias to /src

import customButton from '@/components/Button'
import vehicleList from '@/components/VehicleList'

export default {
  name: 'home',
  components:{
    customButton,
    vehicleList
  }
}
</script>
