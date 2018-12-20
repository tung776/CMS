/* eslint-disable */
<template>
    <div id="app">
        <div id="nav">
            <NavBar />
        </div>
        <RouterView />
    </div>
</template>

<script>
import NavBar from '@/components/NavBar'

export default {
    components: {
        NavBar
    },
    mounted() {
        this.$store.dispatch('getLocations')
    }
}
</script>
