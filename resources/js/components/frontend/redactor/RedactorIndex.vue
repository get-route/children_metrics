<template>
    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <div class="row">
                <div class="col-lg-12">
                    <FontsController
                        dispatchFont="FONT_PROPERTY"
                        dispatchName="NAME_PROPERTY"
                        dispatchSizeFont = "FONT_SIZE"
                        dispatchColor = "FONT_COLOR"
                        dispatchTopPos ="TOP_NAME"
                        dispatchLeftPos ="LEFT_NAME"
                        :namesField = this.$store.state.fontRedact.name
                        :fontSizeField = this.$store.state.fontRedact.fontSizeName
                        :fontColorField=this.$store.state.fontRedact.colorName
                        :topPosition="this.$store.state.fontRedact.topName"
                        :leftPosition="this.$store.state.fontRedact.leftName"
                        :posField="this.$refs.nameField"
                        :PosImg = "this.$refs.fotodemo"
                        h2="Настройка имени"
                        faqButton="'Укажите имя, которое будет использоваться при заголовки метрики. При желании можно нажмать на значок шестеренки и настроить текстовую область.'"
                        formPlaceholder="Это тоже"
                    ></FontsController>
<!--                    <FontsController-->
<!--                    dispatchFont="FONT_PROPERTY_CHILD"-->
<!--                    dispatchName="NAME_PROPERTY_CHILD"-->
<!--                    dispatchSizeFont = "FONT_SIZE_CHILD"-->
<!--                    dispatchColor = "FONT_COLOR_CHILD"-->
<!--                    :namesField = this.$store.state.ChildFonts.nameChild-->
<!--                    :fontSizeField = this.$store.state.ChildFonts.fontSizeNameChild-->
<!--                    :fontColorField=this.$store.state.ChildFonts.colorNameChild-->
<!--                    h2="Настройка пола"-->
<!--                    faqButton="'Укажите имя'"-->
<!--                    formPlaceholder="Задайте имя"-->
<!--                ></FontsController>-->
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
        </div>

        <!-- #OutPut information input field section# -->
        <div class="col-lg-7 col-md-7 col-7 text-center sticky-top mt-6" >

            <img src="public/Frontend/img/metrica/metrika2.jpg" class="foto_demo" ref="fotodemo">

                    <div  class="col-lg-12 text-center" id="metric_success">
                        <div @click="img($event)" ref="nameField" :style="'font-family:'+this.$store.state.fontRedact.font+';font-size:' + this.$store.state.fontRedact.fontSizeName + 'px'+';'+ 'color:' + this.$store.state.fontRedact.colorName+ ';position: absolute; left:'+ this.$store.state.fontRedact.leftName+'px; top:'+this.$store.state.fontRedact.topName+'px'">
                                {{this.$store.state.fontRedact.name}}
                        </div>

                    </div>



        </div>
        <!-- #/END OutPut information input field section# -->


    </div>
        <SaveComponent
        :imgNatParams="this.$refs.fotodemo"
        >

        </SaveComponent>



</template>

<script>
    import FontsController from "./fonts/FontsController.vue";
    import SaveComponent from "./save/SaveComponent.vue";
    export default {
        name: "Redactor-Index",
        components: {SaveComponent, FontsController},
        data(){
          return{

          }
        },
        mounted() {
            //this.$store.dispatch("actionScreenWeight",window.screen.width - 90)
            //this.$store.dispatch("actionScreenHeight", window.screen.height - 90)
            //размеры $event.target.getBoundingClientRect()
            //this.img()
            // console.log(this.$refs.fotodemo.getBoundingClientRect().right)
            // console.log(document.getElementById("canvas"))
            // console.log(this.$refs.fotodemo.naturalHeight)
            // console.log(this.$refs.fotodemo.naturalWidth)
            // console.log(this.$refs.fotodemo.clientHeight)
            // console.log(this.$refs.fotodemo.clientWidth)
             console.log(this.$refs)
            console.log("Left - "+this.$store.state.fontRedact.leftName,
            "TOP - " + this.$store.state.fontRedact.topName)
        },
        computed:{
        },
        methods:{

        }

    }
</script>

<style >
    .bounce-enter-active {
        animation: bounce-in .5s;
    }
    .bounce-leave-active {
        animation: bounce-in .5s reverse;
    }
    @keyframes bounce-in {
        0% {
            transform: scale(0);
        }
        50% {
            transform: scale(1.5);
        }
        100% {
            transform: scale(1);
        }
    }
    .hr{
        border-bottom: #190b34 dashed 2px;
        color: #190b34;
        font-family: "Segoe Script";
        opacity: 70%;
    }
    .step_botton{
        margin: 2px;
    }
    .foto_demo{
        width: 80%;
        height: auto;
    }
    .foto_demo img{


    }
    .foto_demo img:hover{
        background-color: #0b2e13;
    }

</style>
