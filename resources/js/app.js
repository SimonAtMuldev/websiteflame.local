/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import Create from "./components/Create";
import Update from "./components/Update";
import Comments from "./components/Comments";

Vue.use(VueRouter);

let app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
});


require('./bootstrap');
// Vue.component('example-component', require('./components/Homepage.vue').default);

// window.Vue = require('vue');
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

