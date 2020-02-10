require('./bootstrap');

//Modeule Import
window.Vue = require('vue');
import VueRouter from 'vue-router'
import axios from 'axios'
import {routes} from './router.js'
import VueLoading from 'vuejs-loading-plugin'
import lodingC from './components/loding'
//Module Import


//Module Use
Vue.use(axios);
Vue.use(VueRouter);
Vue.use(VueLoading);

const router = new VueRouter({
  routes // short for `routes: routes`
})
//Modeule Use 



//vue component 
Vue.component("breadcrumb",require('./components/BreadCumbComponent').default);

//vue component








// overwrite program

	
	// For loading
	Vue.use(VueLoading, {
	  dark: true, // default false
	  text: 'Ladataan', // default 'Loading'
	  loading: true, // default false
	  customLoader: lodingC, // replaces the spinner and text with your own
	  background: 'rgb(255,255,255)', // set custom background
	  classes: 'spinner-border'// array, object or string
});


// All Global
Vue.mixin({
    
     methods:{
         LoadingStatus:function(){
             this.$loading(true);
             setTimeout(() => this.$loading(false), 1000)
         }
     }
});

const app = new Vue({
  router
}).$mount('#app')

