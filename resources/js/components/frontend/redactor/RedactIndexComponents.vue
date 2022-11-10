<template>
        <div class="row">
            <div class="col-lg4">
                <input v-model="names" placeholder="Укажите имя ребенка">
            </div>
            <div class="col-lg-4" v-if="names">
                <select class="form-select btn font-selected" v-model="fontSelect" @click.self="FontsClick($event)">
                    <option selected :value="fontSelect">Выберите шрифт...</option>
                    <option class="segoe-font" value="segoe-font">{{names}}</option>
                    <option class="verdana-font" value="verdana-font">{{names}}</option>
                    <option>Three</option>
                </select>
                {{fontSelect}}
            </div>
            <div class="col-lg-8">

                        <p :class="fontSelect"> {{names}} </p>

            </div>
        </div>

</template>

<script>
    export default {
        name: "redact-index",
        data(){
            return{
                font:null,
                fontSelect:"Выберите шрифт",
                names:null,
            }
        },
        methods:{
            FontsClick(event){
                console.log(event.target.value)
            }
        }
    }
</script>

<style scoped>
    .font-selected option{
        font-size: 20px;

    }
.segoe-font{
    font-family: "Segoe Script";
    font-size: 34px;
}
    .verdana-font{
    font-family: "Verdana";
    font-size: 34px;
}


</style>
