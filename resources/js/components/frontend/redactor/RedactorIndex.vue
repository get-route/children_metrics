<template>
    <div class="row">
        <div class="col-lg-4">
            <FontsController></FontsController>
        </div>

        <div class="col-lg-8" >

            <font :class="this.$store.state.fontRedact.font">
            {{this.$store.state.fontRedact.name}}
            {{this.$store.state.fontRedact.count}}
        </font>
        </div>
    </div>

</template>

<script>
    import FontsController from "./fonts/FontsController.vue";
    import {mapState} from 'vuex'
    export default {
        name: "Redactor-Index",
        components: {FontsController},

    }
</script>

<style scoped>

</style>
