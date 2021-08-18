/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// require('./../../public/assets/js/imagesloaded.pkgd.min.js');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import { Form, HasError, AlertError } from 'vform';

Vue.use(VueRouter);

window.Form = Form;

let routes = [
    { 
        path: window.domain_url+'/login',
        name:"login", 
        component: require('./components/auth/Login.vue').default 
    },
    { 
        path: window.domain_url+'/register',
        name:"register", 
        component: require('./components/auth/Register.vue').default 
    },
    // { path: window.domain_url+'/*', name:'NotFound', component: require('./components/NotFound.vue').default  },
];

const router = new VueRouter({
	mode: 'history',
    routes // short for `routes: routes`
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('login', require('./components/auth/Login.vue').default);
Vue.component('register', require('./components/auth/Register.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
});
