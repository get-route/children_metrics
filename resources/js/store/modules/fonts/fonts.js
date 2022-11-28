const state= {
    name:null,
    font:null,
    fontSizeName:15,
    colorName:null,
    topName:95,
    leftName: 95,
    rightName:95,
    bottomName:95,


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
    TOP_NAME(context, payload){
        state.bottomName = state.topName
        context.commit("SET_TOP_NAME", payload)
    } ,
    LEFT_NAME(context, payload){
        context.commit("SET_LEFT_NAME", payload)
    } ,
    RIGHT_NAME(context, payload){
        context.commit("SET_RIGHT_NAME", payload)
    } ,
    BOTTOM_NAME(context, payload){
        state.topName = state.bottomName
        context.commit("SET_BOTTOM_NAME", payload)
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
    GET_TOP_NAME(state){
        return state.topName;
    } ,
    GET_LEFT_NAME(state){
        return state.leftName;
    } ,
    GET_RIGHT_NAME(state){
        return state.rightName;
    } ,
    GET_BOTTOM_NAME(state){
        return state.bottomName;
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
    SET_TOP_NAME:(state, payload)=>{
        state.topName = payload
}  ,
    SET_LEFT_NAME:(state, payload)=>{
        state.leftName = payload
}  ,
    SET_RIGHT_NAME:(state, payload)=>{
        state.rightName = payload
}  ,
    SET_BOTTOM_NAME:(state, payload)=>{
        state.bottomName = payload
}  ,

}
export default {state, actions, getters, mutations}
