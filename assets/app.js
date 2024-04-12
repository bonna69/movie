import './bootstrap.js';
import './styles/app.css';
import './styles/app.scss';
import { Tooltip, Toast, Popover } from 'bootstrap';
import { createApp } from 'vue';
import PrimeVue from 'primevue/config';
import App from './components/App.vue';

const app = createApp(App);
// Delimiters changed to ES6 template string style
app.config.compilerOptions.delimiters = ['${', '}$']
app.use(PrimeVue);
app.mount('#app')