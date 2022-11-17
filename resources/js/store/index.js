import test2 from "./modules/test2.js";
import fontsRedact from "./modules/fonts/fonts.js";
//import redactor from "./modules/redactor.js";
import {createStore} from "vuex";
//createApp().use(createStore)

export default createStore( {
    state: {
        // font:55,

    },
    actions: {
        // SET(context , payload){
        //     context.commit("SETF",payload)
        // }
    },
//Получают данные от хранилища. Писать заглавными буквами
    getters : {
        // names(state) {
        //     return state.font;
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
    },

    modules:{
        tests:test2,
        fontRedact:fontsRedact,
       // redactor:redactor,
    },
})


