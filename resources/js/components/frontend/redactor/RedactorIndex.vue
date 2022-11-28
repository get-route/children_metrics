<template>
    <div class="row">
        <div class="col-lg-5">
            <div class="row">
                <div class="col-lg-12">
                    <FontsController
                        dispatchFont="FONT_PROPERTY"
                        dispatchName="NAME_PROPERTY"
                        dispatchSizeFont = "FONT_SIZE"
                        dispatchColor = "FONT_COLOR"
                        :namesField = this.$store.state.fontRedact.name
                        :fontSizeField = this.$store.state.fontRedact.fontSizeName
                        :fontColorField=this.$store.state.fontRedact.colorName
                        h2="Настройка имени"
                        faqButton="'Укажите имя, которое будет использоваться при заголовки метрики. При желании можно нажмать на значок шестеренки и настроить текстовую область.'"
                        formPlaceholder="Это тоже"
                    ></FontsController>
                    <FontsController
                    dispatchFont="FONT_PROPERTY_CHILD"
                    dispatchName="NAME_PROPERTY_CHILD"
                    dispatchSizeFont = "FONT_SIZE_CHILD"
                    dispatchColor = "FONT_COLOR_CHILD"
                    :namesField = this.$store.state.ChildFonts.nameChild
                    :fontSizeField = this.$store.state.ChildFonts.fontSizeNameChild
                    :fontColorField=this.$store.state.ChildFonts.colorNameChild
                    h2="Настройка пола"
                    faqButton="'Укажите имя'"
                    formPlaceholder="Задайте имя"
                ></FontsController>
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
                @touchmove.prevent="movemob($event)"
                @mousedown="this.clicks = true" @mousemove.prevent="move($event)"

            </div>
        </div>

        <div class="col-lg-12">
            <section class="metrica">

                <div   class="col-lg-12 text-center">

                    <div   :class="this.$store.state.fontRedact.font" :style="'font-size:' + this.$store.state.fontRedact.fontSizeName + 'px'+';'+ 'color:' + this.$store.state.fontRedact.colorName">


                        <div draggable="true" :style="'position: absolute; left:'+ this.$store.state.fontRedact.leftName+'px ; right:'+this.$store.state.fontRedact.rightName+'px; bottom:'+this.$store.state.fontRedact.bottomName+'px; top:'+this.$store.state.fontRedact.topName+'px'">
                            {{this.$store.state.fontRedact.name}}


                        <p  class="col-lg-12" :style="'font-size:' + this.$store.state.fontRedact.fontSizeName/2 + 'px'">
                            <button class="text-center btn btn-dark step_botton" @click="RightBottomPosition('TOP_NAME',10,this.$store.state.fontRedact.topName)">🡣</button>
                            <button  class="text-center btn btn-dark step_botton" @click="RightBottomPosition('BOTTOM_NAME',-20,this.$store.state.fontRedact.topName)">🡡</button>
                            <button class="text-center btn btn-dark step_botton" @click="RightBottomPosition('RIGHT_NAME',10,this.$store.state.fontRedact.rightName)">🡠</button>
                            <button class="text-center btn btn-dark step_botton" @click="RightBottomPosition('LEFT_NAME',10,this.$store.state.fontRedact.leftName)">🡢</button>


                        </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12">

                    <p  :class="this.$store.state.ChildFonts.fontChild" :style="'font-size:' + this.$store.state.ChildFonts.fontSizeNameChild + 'px'+';'+ 'color:' + this.$store.state.ChildFonts.colorNameChild">
                        {{this.$store.state.ChildFonts.nameChild}}

                    </p>
                </div>
            </section>

        </div>
    </div>



</template>

<script>
    import FontsController from "./fonts/FontsController.vue";
    export default {
        name: "Redactor-Index",
        components: {FontsController},
        data(){
          return{
              elem:null,
              fieldActive:null,
              stepFocus:false,
              posX:null,
              posY:null,
              top:null,
              left:null,
              touch:null,
              clicks:false,
          }
        },
        computed: {
            btnStyles() {
                return {
                    font_size: 'font-size:' + this.$store.state.fontRedact.fontSizeName + 'px',
                };
            },
        },
        methods:{
            TopLeftPosition(dispatch, step, state){
                this.$store.dispatch(dispatch,state-step)
            },
            RightBottomPosition(dispatch, step, state){
                this.$store.dispatch(dispatch,state+step)
            },

            // Move(pageX, pageY){
            //     this.posX = pageX + 'px'
            //     this.posY = pageY -this.$store.state.fontRedact.fontSizeName/2 + 'px'
            // },
            // move: function ($event)
            //     {
            //         if (this.clicks == true){
            //
            //
            //         //console.log($event.offsetX)
            //         //console.log($event.pageY )
            //         //console.log($event.pageX)
            //         this.top = $event.pageY -(1200+$event.offsetY/2)
            //         this.left = $event.pageX-($event.offsetX/2)
            //         this.touch="cursor:pointer; z-index:1000; position: absolute; left:"+ this.left+"px ; top:"+ this.top+"px"
            //     }},
            //
            //  movemob(event){
            //     //console.log(this.touch)
            //
            //
            //     //console.log(event.changedTouches[0].pageX)
            //     //console.log(event.changedTouches[0].target.clientHeight)
            //     //console.log(this.$store.state.fontRedact.fontSizeName)
            //     //console.log(event.target.clickHeight)
            //     //console.log(event.changedTouches[0].pageY)
            //
            //     this.top = event.changedTouches[0].pageY -(1140+event.changedTouches[0].target.clientHeight/2)
            //     this.left = event.changedTouches[0].pageX-(event.changedTouches[0].target.clientWidth/2)
            //      //console.log(this.touch)
            //     this.touch="cursor:pointer; z-index:1000; position: absolute; left:"+ this.left+"px ; top:"+ this.top+"px"
            //    // this.posX = event.changedTouches[0].pageX-90
            //     //this.posY = event.changedTouches[0].pageY - 900/2
            //
            // },
            // MouseMowe(event){
            //     //this.Move(event.pageX, event.pageY)
            //
            // },
            // Position(event){
            //     this.Move(event.pageX, event.pageY)
            //     // this.elem = ' position: absolute; left:'+ this.posX+'px ; top:'+ this.posY+'px'
            //     this.elem = 'position: absolute; left:'+ this.posX+'px ; top:'+ this.posY+'px'
            //    // console.log(this.posX)
            // }

        }

    }
</script>

<style >
    .metrica{
        background-image: url("./public/Frontend/img/metrica/metrika.jpg" );
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }
    .segoe-font{
        font-family: "Segoe Script";
    }
    .verdana-font{
        font-family: "Verdana";
    }
    .monotype-corsiva{
        font-family: "Monotype Corsiva";
    }
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
</style>
