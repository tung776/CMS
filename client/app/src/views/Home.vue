<template>
  <div class="home">
  </div>
</template>

<script>
// @ is an alias to /src

import axios from 'axios'

export default {
  name: 'home',
  mounted() {
    axios.get('http://localhost:1000/vehicles').then(response => {
      console.log(response);
    })
  },
  
}
</script>
