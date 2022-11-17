<template>
    <div class="row">
        <div class="col-lg-4">

            <FontsController>
<!--                <Chrome v-model="colors" @change-color="onChange"></Chrome>-->
            </FontsController>
        </div>
        <input class="color-input" data-huebee='{ "setBGColor": true, "saturations": 2 }' />
        <div class="col-lg-8" >
            <p :style="btnStyles.color">Привет мир</p>
            <p :class="this.$store.state.fontRedact.font" :style="btnStyles.font_size">
            {{this.$store.state.fontRedact.name}}
            {{this.$store.state.fontRedact.count}}

        </p>
        </div>
    </div>

</template>

<script>
    import FontsController from "./fonts/FontsController.vue";
    import { Photoshop, Chrome } from 'vue-color'
    import 'vue-color/dist/vue-color.min'
    import {mapState} from 'vuex'
    export default {
        name: "Redactor-Index",
        components: {FontsController, Chrome},
        // mounted() {
        //     this.FontSizeText(this.$store.state.fontRedact.count)
        // },
        data () {

            return {

                colors: {
                    hex: '#860000',
                    hex8: '#194D33A8',
                    hsl: { h: 150, s: 0.5, l: 0.2, a: 1 },
                    hsv: { h: 150, s: 0.66, v: 0.30, a: 1 },
                    rgba: { r: 25, g: 77, b: 51, a: 1 },
                    a: 1
                }
            }
        },
        computed: {
            btnStyles() {
                return {
                    color: 'color:' + this.colors.hex,
                    font_size: 'font-size:' + this.$store.state.fontRedact.count + 'px',
                };
            },
        },
        methods:{
            onChange (val) {
                this.colors = val
            }
        }
        //methods:{
            // FontSizeText(font){
            //     return myElement.style.setProperty('--font-sizen', font +'px')
            // }
      //  }
    }
</script>

<style >

</style>
