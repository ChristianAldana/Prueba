import { createApp } from 'vue';
import Caja from './components/Caja.vue';
import CuartoComputacion from './components/CuartoComputacion.vue'; // Nombre correcto
import QuintoComputacion from './components/QuintoComputacion.vue';

const app = createApp({});

// Registrar los componentes globalmente
app.component('caja', Caja);
app.component('cuarto-computacion', CuartoComputacion); // Nombre correcto
app.component('quinto-computacion', QuintoComputacion); // Nombre correcto




// Montar la aplicación Vue
app.mount('#app');
