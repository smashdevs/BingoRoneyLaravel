import './bootstrap';
import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import ExampleComponentDois from './components/Carousel.vue';
import ChatComponent from './components/Chat.vue'
import TelaBingoComponent from './components/TelaBingo.vue'
import CorpoSorteio from './components/CorpoSorteio.vue'
import ModalJogoAguardando from './components/modais/jogos/Aguardando.vue'
import ModalJogoVencedor from './components/modais/jogos/Vencedor.vue'

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

app.component('carousel', ExampleComponentDois);
app.component('chat', ChatComponent)
app.component('tela-bingo',TelaBingoComponent)
app.component('corpo-sorteio',CorpoSorteio)
app.component('modal-jogo-aguardando',ModalJogoAguardando)
app.component('modal-jogo-vencedor',ModalJogoVencedor)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.globEager('./**/*.vue')).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
