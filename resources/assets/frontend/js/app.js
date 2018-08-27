require('./bootstrap');
window.axios = require('axios');
import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import {routes} from './routes';
import StoreData from './store';
 import FrontEnd from './components/FrontEnd.vue'

Vue.use(VueRouter);
Vue.use(Vuex);

const store = new Vuex.Store(StoreData);

const router = new VueRouter({
	routes,
	mode: 'history'
});

// router.beforeEach((to, from, next) => {

// 	const requiresAuth = to.matched.some(record => record.meta.requiresAuth);
// 	const currentUser = store.state.currentUser;

// 	const isFrontend = to.matched.some(record => record.meta.type);

// 	if (isFrontend) {
	
// 	}else{
// 		if (requiresAuth && !currentUser) {
// 			next('/admin/login');
// 		}else if ((to.path == '/admin/login' || to.path == '/') && currentUser) {
// 			next('/admin/home');
// 		}else{
// 			next();
// 		}
// 	}
	
// });

const app = new Vue({
    el: '#web_app',
    router,
    store,
     components:{
    	FrontEnd
    }
});
