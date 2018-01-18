
require('./bootstrap');

window.Vue = require('vue');




//CREATE VUEX

/*
const store = new Vuex.Store({
   state:{
       items:{}
   },
    mutations:{
       setItems(state,obj){
           state.items = obj;

       }

    }

});
*/


Vue.component('topo',require('./components/topo.vue'));
Vue.component('panel',require('./components/panel.vue'));
Vue.component('table-list',require('./components/tableList.vue'));




const app = new Vue({
    el: '#app',

   });


