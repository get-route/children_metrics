const state= {
    nameChild:null,
    fontChild:null,
    fontSizeNameChild:15,
    colorNameChild:null,


}
const actions= {
    FONT_PROPERTY_CHILD(context , payload){
        context.commit("SET_FONT_REDACTOR_CHILD",payload)
    } ,
    NAME_PROPERTY_CHILD(context , payload){
        context.commit("SET_NAMES_REDACTOR_CHILD",payload)
    },

    FONT_SIZE_CHILD(context, payload){
        context.commit("SET_SIZE_FONT_CHILD", payload)
    } ,
    FONT_COLOR_CHILD(context, payload){
        context.commit("SET_SIZE_COLOR_CHILD", payload)
    } ,


}
//Получают данные от хранилища. Писать заглавными буквами
const getters = {
    GET_FONT_CHILD(state) {
        return state.fontChild;
    } ,
    GET_NAMES_CHILD(state) {
        return state.nameChild;
    },

    GET_FONT_SIZE_CHILD(state){
        return state.fontSizeNameChild;
    } ,
    GET_FONT_COLOR_CHILD(state){
        return state.colorNameChild;
    } ,


}
//Для установки нужных данных в хранилище. Идет как commit
const mutations = {
    SET_FONT_REDACTOR_CHILD:(state, payload)=>{
        state.fontChild = payload
    },
    SET_NAMES_REDACTOR_CHILD:(state, payload)=>{
        state.nameChild = payload
    },
    SET_SIZE_FONT_CHILD:(state, payload)=>{
        state.fontSizeNameChild = payload
    }  ,
    SET_SIZE_COLOR_CHILD:(state, payload)=>{
        state.colorNameChild = payload
    }  ,

}
export default {state, actions, getters, mutations}
