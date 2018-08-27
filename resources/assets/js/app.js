require('./bootstrap');
window.axios = require('axios');
import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import {routes} from './routes';
import StoreData from './store';
import MainApp from './components/admin/MainApp.vue'
import {initialize} from './helpers/general';
import Toasted from 'vue-toasted';


Vue.use(VueRouter);
Vue.use(Vuex);
Vue.use(Toasted, {
  duration: 7000
})

const store = new Vuex.Store(StoreData);

const router = new VueRouter({
	routes,
	mode: 'history'
});

initialize(store,router);

const app = new Vue({
    el: '#app',
    router,
    store,
    components:{
    	MainApp
    }
});
