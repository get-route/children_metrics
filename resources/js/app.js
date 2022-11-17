import './bootstrap';
import { createApp } from 'vue';
import tyt from "./components/tyt.vue";
import store from './store';
// register component globally
import { Photoshop, Chrome } from 'vue-color'
//import {createStore} from "vuex";
import RedactorIndex from "./components/frontend/redactor/RedactorIndex.vue";
//import ExampleComponentss from "./components/ExampleComponent.vue";




const app = createApp({
    components:{
        tyt,
        RedactorIndex,
        Chrome
    }
});
app.use(store);

app.mount('#app');
