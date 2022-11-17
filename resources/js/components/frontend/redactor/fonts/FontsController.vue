<template>


    <div class="col-lg-6">
        <input @input="NameClick" placeholder="Укажите имя ребенка">
    </div>
    <div class="col-lg-6" v-if="this.$store.state.fontRedact.name">
        <select class="form-select btn font-selected" @change="FontsClick">
            <option selected>Выберите шрифт</option>
            <option class="segoe-font" value="segoe-font">{{this.$store.state.fontRedact.name}}</option>
            <option class="verdana-font" value="verdana-font">{{this.$store.state.fontRedact.name}}</option>
            <option class="monotype-corsiva" value="monotype-corsiva">{{this.$store.state.fontRedact.name}}</option>
        </select>
    </div>
    <div class="col-lg-6">
        <input class="w-25" type="number" max="60" min="16" @input="FontSize">
    </div>





</template>

<script>
    //import {mapMutations,mapGetters} from 'vuex'
export default {
        name: "Fonts-Controller",
    namespaced: true,


    methods:{

        FontsClick(event){
                console.log(event.target.value)
                this.$store.dispatch("FONT_PROPERTY", event.target.value)
            },
        NameClick(event){
                console.log(event.target.value)
                this.$store.dispatch("NAME_PROPERTY", event.target.value)
            },
        FontSize(event){
                console.log(event.target.value)
                this.$store.dispatch("FONT_SIZE", event.target.value)
            },


        }
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
