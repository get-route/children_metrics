import './bootstrap';
import { createApp } from 'vue';
import store from './store';
import RedactorIndex from "./components/frontend/redactor/RedactorIndex.vue";
import Vue3ColorPicker from "vue3-colorpicker";
import "vue3-colorpicker/style.css";


const app = createApp({
    components:{
        RedactorIndex,

    }


});
app.use(Vue3ColorPicker)
app.use(store);

app.mount('#app');
