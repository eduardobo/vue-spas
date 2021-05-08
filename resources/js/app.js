require('./bootstrap');

// window.Vue = require('vue').default;
//
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//
// const app = new Vue({
//     el: '#app',
// });

import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes'

Vue.use(VueRouter)

let app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});
