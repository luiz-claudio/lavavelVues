
require('./bootstrap');

window.Vue = require('vue');
import Vuex from 'vuex';
Vue.use(Vuex);









Vue.component('topo',require('./components/topo.vue'));
Vue.component('panel',require('./components/panel.vue'));
Vue.component('table-list',require('./components/tableList.vue'));




const app = new Vue({
    el: '#app',
    store: new Vuex.Store({
        state:{
            itens:{teste:"opa funcionou1"}
        },
        mutations:{
            setItens(state,obj){
                state.itens = obj;
            }
        }




    })


   });


