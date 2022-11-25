<template>

                <h2  class="hr mt-5 mb-5 text-center">{{h2}}</h2>
                <div class="col-lg-12">
                    <div class="input-group mb-3">
                        <input @input="NameClick($event, dispatchName)" type="text" class="form-control" :placeholder="formPlaceholder" aria-label="Recipient's username" aria-describedby="basic-addon2" id="nameChild">
                        <div class="input-group-prepend">
                            <label @click="show.nameShow = !show.nameShow" class="btn bg-secondary m-2" style="color: #f1f3f2" for="inputGroupSelect01"><i class="fa fa-cog" aria-hidden="true"></i></label>
                            <label @click="infoAlert(faqButton)" class="btn bg-secondary m-2" style="color: #f1f3f2" for="inputGroupSelect01"><i class="fa fa-question" aria-hidden="true"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <transition name="bounce">
                    <div v-if="show.nameShow" class="row">
                        <div class="col-lg-6" >
                                Выберите цвет шрифта: {{FontColor}} <color-picker v-model:pureColor="pureColor"/>
                        </div>
                        <div class="col-lg-6">
                            <p>
                                <button class="btn-danger btn" @click="FontSizeButton('-',fontSizeField, dispatchSizeFont)">-</button>
                                Размер: {{fontSizeField}}
                                <button class="btn-success btn"  @click="FontSizeButton('+',fontSizeField, dispatchSizeFont)" >+</button>
                            </p>

                        </div>


                        <div class="input-group col-lg-12 text-center" >
                            <div class="input-group-prepend">
                                <label  class="input-group-text" for="inputGroupSelect01">Шрифт</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" @change="NameClick($event, dispatchFont)">
                                <option selected>Выбрать...</option>
                                <option v-for="fonts in this.$store.state.fontAr" :class="fonts" :value="fonts">({{fonts}}) {{namesField}}</option>
                            </select>
                        </div>
                    </div>
                </transition>








</template>

<script>
    //import {mapMutations,mapGetters} from 'vuex'
export default {
        name: "Fonts-Controller",
    namespaced: true,
    props:[
        'dispatchFont',
        'dispatchName',
        'dispatchSizeFont',
        'dispatchColor',
        'h2',
        'formPlaceholder',
        'faqButton',
        'namesField',
        'fontSizeField',
        'fontColorField',
    ],
    data(){
      return{
          //ID input hidden params
          show: {
              nameShow:false,
          },
          pureColor:null,

              }

    },
    methods:{
        NameClick(event,dispatch){
                this.$store.dispatch(dispatch, event.target.value)

            },

        FontSizeButton(value ,fontSizeField, dispatch){
            if (value === '-' && fontSizeField > 12){
                fontSizeField --
                this.$store.dispatch(dispatch, fontSizeField)
            }else {
                fontSizeField ++
                this.$store.dispatch(dispatch, fontSizeField)
            }
        },

        infoAlert(alerts){
            return alert(alerts)
        },
        },
    computed: {

        FontColor(){
          this.$store.dispatch(this.dispatchColor, this.pureColor)
        },
    },

}
</script>

<style >

</style>
