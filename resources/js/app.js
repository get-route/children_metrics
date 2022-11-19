import './bootstrap';
import { createApp } from 'vue';
import tyt from "./components/tyt.vue";
import store from './store';
// register component globally
import { Photoshop, Chrome } from 'vue-color'
//import {createStore} from "vuex";
import RedactorIndex from "./components/frontend/redactor/RedactorIndex.vue";
//import ExampleComponentss from "./components/ExampleComponent.vue";
import Vue3ColorPicker from "vue3-colorpicker";
import "vue3-colorpicker/style.css";



const app = createApp({
    components:{
        tyt,
        RedactorIndex,
    }


});
app.use(Vue3ColorPicker)
app.use(store);

app.mount('#app');
