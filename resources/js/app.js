/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
Vue.component('principal-component', require('./components/PrincipalComponent.vue').default);
Vue.component('FormularioComponent', require('./components/FormularioComponent.vue').default);
Vue.component('NotificacionComponent', require('./components/NotificacionComponent.vue').default);
const app = new Vue({
    el: '#app',
});
