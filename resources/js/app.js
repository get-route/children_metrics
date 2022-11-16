import './bootstrap';
import { createApp } from 'vue';
import tyt from "./components/tyt.vue";
import store from './store';
//import {createStore} from "vuex";
import RedactorIndex from "./components/frontend/redactor/RedactorIndex.vue";
//import ExampleComponentss from "./components/ExampleComponent.vue";

const app = createApp({
    components:{
        tyt,
        RedactorIndex
    }
});


app.use(store);

app.mount('#app');
