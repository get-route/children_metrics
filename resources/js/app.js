import './bootstrap';
import { createApp } from 'vue';
import store from './store';
import RedactorIndex from "./components/frontend/redactor/RedactorIndex.vue";
import AdminCommentComponent from "./components/admin/AdminCommentComponent.vue";
import AdminMetricComponent from "./components/admin/AdminMetricComponent.vue";
import AdminTagComponent from "./components/admin/AdminTagComponent.vue";
import Vue3ColorPicker from "vue3-colorpicker";
import "vue3-colorpicker/style.css";


const app = createApp({
    components:{
        RedactorIndex,
        AdminMetricComponent,
        AdminTagComponent,
        AdminCommentComponent,
    }


});
app.use(Vue3ColorPicker)
app.use(store);

app.mount('#app');
