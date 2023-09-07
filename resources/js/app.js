import './bootstrap';
import { createApp } from 'vue';
import App from "./App.vue";
import router from "./router";
import PrimeVue from 'primevue/config';
import ToastService from 'primevue/toastservice';

import '@/assets/styles.scss';

import "primevue/resources/themes/lara-light-blue/theme.css";
//import "primevue/resources/primevue.min.css";

const app = createApp(App);
app.use(PrimeVue, { ripple: true });
app.use(router);
app.use(ToastService);
app.mount('#app');


// https://www.youtube.com/watch?v=AHeSjJFR3ZE
// https://forum.primefaces.org/viewforum.php?f=110

