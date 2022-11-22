const state= {
    name:null,
    font:null,
    fontSizeName:15,
    colorName:null,


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
    } ,
    FONT_COLOR(context, payload){
        context.commit("SET_SIZE_COLOR", payload)
    } ,


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
        return state.fontSizeName;
    } ,
    GET_FONT_COLOR(state){
        return state.colorName;
    } ,


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
        state.fontSizeName = payload
}  ,
    SET_SIZE_COLOR:(state, payload)=>{
        state.colorName = payload
}  ,

}
export default {state, actions, getters, mutations}
