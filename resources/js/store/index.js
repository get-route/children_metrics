import test2 from "./modules/test2.js";
import fontsRedact from "./modules/fonts/fonts.js";
import ChildFonts from "./modules/fonts/children.js";
//import redactor from "./modules/redactor.js";
import {createStore} from "vuex";
//createApp().use(createStore)

export default createStore( {
    state: {
        // font:55,
        //Набор шрифтов. fontAr.name = .class
        fontAr : [
            // 'segoe-font',
            // 'verdana-font',
            // 'monotype-corsiva',
            'Segoe Script',
            'Verdana',
            'Monotype Corsiva',
        ],


        // screenWight:null,
        // screenHeight:null,
    },
    actions: {
        // SET(context , payload){
        //     context.commit("SETF",payload)
        // }
        // actionScreenHeight(context, payload){
        //     context.commit("setScreenHeight",payload)
        // },
        // actionScreenWeight(context, payload){
        //     context.commit("setScreenWight",payload)
        // },
    },
//Получают данные от хранилища. Писать заглавными буквами
    getters : {
        // names(state) {
        //     return state.font;
        // }
        // getScreenWight(state){
        //     return state.screenWight
        // } ,
        // getScreenHeight(state){
        //     return state.screenHeight
        // }
    },
//Для установки нужных данных в хранилище. Идет как commit
    mutations : {
        // SETF:(state, payload)=>{
        //     state.font = payload
        // },
        // increment (state) {
        //     state.count++
        // }
        // setScreenWight:(state,payload)=>{
        //     state.screenWight = payload
        // },
        // setScreenHeight:(state,payload)=>{
        //     state.screenHeight = payload
        // },

    },

    modules:{
        tests:test2,
        fontRedact:fontsRedact,
        ChildFonts:ChildFonts,
    },
})


