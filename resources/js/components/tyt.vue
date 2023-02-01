<template>
<div>
<!--    {{$store.state.tests.firstName}}-->
    <Redactor-Index imageMetrik="imageM"></Redactor-Index>

    <!--    {{this.$store.state.count}}-->
</div>
</template>

<script>
    import RedactorIndex from "./frontend/redactor/RedactorIndex.vue";
    export default {
        name: "tyt",
        components:{
          RedactorIndex
        },
        data(){
            return {
          testing:null,
            }
        },
        props:['imageM'],
        computed:{
            test(){
              this.testing = imageM
            }
        }

    // methods: {
    //     // increment() {
    //     //     this.$store.commit('increment')
    //     //     console.log(this.$store.state.count)
    //     // }
    //     // }
        }
</script>

<style scoped>

</style>
