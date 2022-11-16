<template>
<div>
    {{$store.state.tests.firstName}}
    <button @click="increment">Нажать</button>
    {{this.$store.state.count}}
</div>
</template>

<script>
    export default {
        name: "tyt",

    methods: {
        increment() {
            this.$store.commit('increment')
            console.log(this.$store.state.count)
        }
        }
        }
</script>

<style scoped>

</style>
