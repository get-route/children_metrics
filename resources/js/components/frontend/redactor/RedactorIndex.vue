<template>
    <div class="row">

            <FontsController></FontsController>

        <div class="col-lg-6">
            <p :class="this.$store.state.fontRedact.font" :style="btnStyles.font_size+';'+ 'color:' + this.$store.state.fontRedact.gender_child">
                {{this.$store.state.fontRedact.child}}
                {{this.$store.state.fontRedact.count}}

            </p>
            <p :class="this.$store.state.fontRedact.font" :style="btnStyles.font_size+';'+ 'color:' + this.$store.state.fontRedact.name_child">
                {{this.$store.state.fontRedact.name}}
                {{this.$store.state.fontRedact.count}}

            </p>
        </div>

        <p>Имя</p>

        <p>Дата</p>
        <p>Время</p>
        <p>День недели</p>

        <p>Вес</p>
        <p>Рост</p>

        <p>Мама</p>
        <p>Папа</p>
        <p>братья</p>
        <p>сестры</p>

        <p>Город</p>
        <p>год соб</p>
        <p>Знак Зодиака</p>
        <p>доп</p>


    </div>

</template>

<script>
    import FontsController from "./fonts/FontsController.vue";
    export default {
        name: "Redactor-Index",

        components: {FontsController},

        // mounted() {
        //     this.FontSizeText(this.$store.state.fontRedact.count)
        // },
        computed: {
            btnStyles() {
                return {
                    font_size: 'font-size:' + this.$store.state.fontRedact.count + 'px',
                };
            },
        },

       //  methods:{
       //      FontSizeText(font){
       //          return myElement.style.setProperty('--font-sizen', font +'px')
       //      }
       // }
    }
</script>

<style >

</style>
