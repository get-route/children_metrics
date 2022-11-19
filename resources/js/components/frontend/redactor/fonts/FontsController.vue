<template>
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-6">
                <input @input="NameClick" @click="InputActive" id="name_child" placeholder="Укажите имя ребенка" >
            </div>
            <div class="col-lg-3">
                <color-picker v-model:pureColor="this.$store.state.fontRedact.name_child"/>
            </div>
            <div class="col-lg-3">
                <input class="w-50" type="number" inputmode="numeric" max="60" min="16" @input="FontSize">
            </div>

                <div class="col-lg-8" v-if="this.$store.state.fontRedact.name">
                    <select class="form-select btn font-selected" @change="FontsClick">
                        <option selected>Выберите шрифт</option>
                        <option class="segoe-font" value="segoe-font">{{this.$store.state.fontRedact.name}}</option>
                        <option class="verdana-font" value="verdana-font">{{this.$store.state.fontRedact.name}}</option>
                        <option class="monotype-corsiva" value="monotype-corsiva">{{this.$store.state.fontRedact.name}}</option>
                    </select>
                </div>

        </div>

    </div>

    <div class="col-lg-6">
        <div>



        </div>


        <input @input="NameCHILD" @click="InputActive" id="gender_child" placeholder="Укажите пол">
    </div>

    <div class="col-lg-6">

    </div>
    <div class="col-lg-8" >







    </div>




</template>

<script>
    //import {mapMutations,mapGetters} from 'vuex'
export default {
        name: "Fonts-Controller",
    namespaced: true,
    data(){
      return{

          pureColor:null,

          activeID:null,
              }
    },

    methods:{

        FontsClick(event){
                console.log(event.target.value)
                this.$store.dispatch("FONT_PROPERTY", event.target.value)
            },
        NameClick(event){
                console.log(event.target.id)
                this.$store.dispatch("NAME_PROPERTY", event.target.value)

            },
        NameCHILD(event){
            console.log(event.target.value)
                this.$store.dispatch("NAME_CHILD_PROPERTY", event.target.value)
            },
        FontSize(event){
                console.log(event.target.value)
                this.$store.dispatch("FONT_SIZE", event.target.value)
            },
        },
    computed: {
        btnStyles() {
            return {
                font_size: 'font-size:' + this.$store.state.fontRedact.count + 'px',
            };
        },
    },
    }
</script>

<style >
    .segoe-font{
        font-family: "Segoe Script";
    }
    .verdana-font{
        font-family: "Verdana";
    }
    .monotype-corsiva{
        font-family: "Monotype Corsiva";
    }


</style>
