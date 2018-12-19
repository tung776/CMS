<template>
  <div class="home">
    <button class="bg-grey py-3 px-5 text-white">button</button>
    <button class="bg-grey py-3 px-5 text-bg-black">button 2</button>
  </div>
</template>

<script>
// @ is an alias to /src

import axios from 'axios'

export default {
  name: 'home',
  mounted() {
    axios.get('http://localhost:1000/vehicles').then(response => {
      console.log(response.data)
    })
  }
  
}
</script>
