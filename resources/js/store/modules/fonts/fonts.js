const state= {
    font:null,
    name:null,
    count:15,
}
const actions= {
    FONT_PROPERTY(context , payload){
        context.commit("SET_FONT_REDACTOR",payload)
    } ,
    NAME_PROPERTY(context , payload){
        context.commit("SET_NAMES_REDACTOR",payload)
    },
    FONT_SIZE(context, payload){
        context.commit("SET_SIZE_FONT", payload)
    }
}
//Получают данные от хранилища. Писать заглавными буквами
const getters = {
    GET_FONT(state) {
        return state.font;
    } ,
    GET_NAMES(state) {
        return state.name;
    },
    GET_FONT_SIZE(state){
        return state.count;
    }

}
//Для установки нужных данных в хранилище. Идет как commit
const mutations = {
    SET_FONT_REDACTOR:(state, payload)=>{
        state.font = payload
    },
    SET_NAMES_REDACTOR:(state, payload)=>{
        state.name = payload
    },
    SET_SIZE_FONT:(state, payload)=>{
        state.count = payload
}
}
export default {state, actions, getters, mutations}
