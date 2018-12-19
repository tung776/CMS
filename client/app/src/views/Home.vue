<template>
  <div class="home">
    <customButton dark></customButton>
  </div>
</template>

<script>
// @ is an alias to /src

import axios from 'axios'
import customButton from '@/components/Button'

export default {
  name: 'home',
  components:{
    customButton
  },
  mounted() {
    axios.get('http://localhost:1000/vehicles').then(response => {
      console.log(response.data)
    })
  }
}
</script>
