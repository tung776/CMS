<template>
    <div>
        <h2>Vehicle List</h2>
        <ul v-for="(item, index) in vehicles_props" :key="index">
            <li>
                {{ item.title }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        vehicles_props: {
            type: Array,
            default: ()=>[]
        }
    }
}
</script>