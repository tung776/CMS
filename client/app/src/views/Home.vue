<template>
  <div class="home">
    <customButton dark></customButton>
    <vehicle-list :vehicles_props = 'vehicles'/>
  </div>
</template>

<script>
// @ is an alias to /src

import axios from 'axios'
import customButton from '@/components/Button'
import vehicleList from '@/components/VehicleList'

export default {
  name: 'home',
  data() {
    return {
      vehicles: []
    }
  },
  components:{
    customButton,
    vehicleList
  },
  mounted() {
    axios.get('http://localhost:1000/vehicles').then(response => {
      console.log(response.data)
      this.vehicles = response.data
    })
  }
}
</script>
