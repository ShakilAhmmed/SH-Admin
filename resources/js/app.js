require('./bootstrap');

//Modeule Import
window.Vue = require('vue');
import VueRouter from 'vue-router'
import {routes} from './router.js'
//Module Import

//Module Use
Vue.use(VueRouter);
const router = new VueRouter({
  routes // short for `routes: routes`
})
//Modeule Use 



const app = new Vue({
  router
}).$mount('#app')

