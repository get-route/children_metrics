<template>
    <div class="col-lg-12">
        <div class="row">
            <section class="name">
                <h2 class="hr mt-2 mb-5 text-center">Настройка имени {{dispatch}}</h2>
                <div class="col-lg-12">
                    <div class="input-group mb-3">
                        <input @input="NameClick" type="text" class="form-control" placeholder="Имя ребенка" aria-label="Recipient's username" aria-describedby="basic-addon2" id="nameChild">
                        <div class="input-group-prepend">
                            <label @click="show.nameShow = !show.nameShow" class="btn bg-secondary m-2" style="color: #f1f3f2" for="inputGroupSelect01"><i class="fa fa-cog" aria-hidden="true"></i></label>
                            <label @click="infoAlert('Укажите имя, которое будет использоваться при заголовки метрики. При желании можно нажмать на значок шестеренки и настроить текстовую область.')" class="btn bg-secondary m-2" style="color: #f1f3f2" for="inputGroupSelect01"><i class="fa fa-question" aria-hidden="true"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <transition name="bounce">
                    <div v-if="show.nameShow" class="row">
                        <div class="col-lg-6">
                            Выберите цвет шрифта <color-picker v-model:pureColor="this.$store.state.fontRedact.name_child"/>
                        </div>
                        <div class="col-lg-6">
                            <p>
                                <button class="btn-danger btn" @click="FontSizeButton('-')">-</button>
                                Размер: {{this.$store.state.fontRedact.count}}
                                <button class="btn-success btn" @click="FontSizeButton('+')">+</button>
                            </p>

                        </div>


                        <div class="input-group col-lg-12 text-center" >
                            <div class="input-group-prepend">
                                <label  class="input-group-text" for="inputGroupSelect01">Шрифт</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" @change="FontsClick($event, dispatch)">
                                <option selected>Выбрать...</option>
                                <option v-for="fonts in fontAr" :class="fonts" :value="fonts">({{fonts}}) {{this.$store.state.fontRedact.name}}</option>
                            </select>
                        </div>
                    </div>
                </transition>
            </section>

        </div>

    </div>






</template>

<script>
    //import {mapMutations,mapGetters} from 'vuex'
export default {
        name: "Fonts-Controller",
    namespaced: true,
    props:['dispatch'],
    data(){
      return{

          //Набор шрифтов. fontAr.name = .class
          fontAr : [
              'segoe-font',
              'verdana-font',
              'monotype-corsiva',
          ],

          //ID input hidden params
          show: {
              nameShow:false,

          },
          nameChild:{
              'font':'g',
          },
          pureColor:null,
          activeID:null,
              }
    },
    methods:{

        FontsClick(event, dispatch){
                console.log(event.target.value)
                this.$store.dispatch(dispatch, event.target.value)
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
        FontSizeButton(value){
            if (value === '-' && this.$store.state.fontRedact.count > 12){
               return this.$store.state.fontRedact.count --
            }else {
                return this.$store.state.fontRedact.count ++
            }
        },
        infoAlert(alerts){
            return alert(alerts)
        }
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

</style>
