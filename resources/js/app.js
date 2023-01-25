import './bootstrap';
import { createApp } from 'vue';
import store from './store';
import RedactorIndex from "./components/frontend/redactor/RedactorIndex.vue";
import AdminCommentComponent from "./components/admin/AdminCommentComponent.vue";
import AdminMetricComponent from "./components/admin/AdminMetricComponent.vue";
import AdminTagComponent from "./components/admin/AdminTagComponent.vue";
import Register from "./components/frontend/auth/Register.vue";
import Auth from "./components/frontend/auth/Auth.vue";
import Vue3ColorPicker from "vue3-colorpicker";
import "vue3-colorpicker/style.css";
import CKEditor from '@mayasabha/ckeditor4-vue3';
const app = createApp({
    components:{
        RedactorIndex,
        AdminMetricComponent,
        AdminTagComponent,
        AdminCommentComponent,
        Register,
        Auth
    }
});
app.use(Vue3ColorPicker)
app.use(store);
app.use(CKEditor);


app.mount('#app');
