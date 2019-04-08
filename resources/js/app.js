



require('./bootstrap');

//require('./dynamic-dropdown');



window.Vue = require('vue');
import moment from 'moment';
import { Form, HasError, AlertError } from 'vform';

import Gate from "./Gate";
Vue.prototype.$gate = new Gate(window.user);



import SweetAlert2 from 'sweetalert2/dist/sweetalert2.js';
import 'sweetalert2/src/sweetalert2.scss';

window.Swal = SweetAlert2;


const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

window.Toast = toast;﻿


window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

Vue.component('pagination', require('laravel-vue-pagination'));

import VueRouter from 'vue-router'

Vue.use(VueRouter)

import VueProgressBar from 'vue-progressbar'
Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '3px'
  })

let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/developer', component: require('./components/Developer.vue') },
    { path: '/profile', component: require('./components/Profile.vue').default },
    { path: '/user', component: require('./components/Users.vue').default },

    { path: '/manage', component: require('./components/manageSchools.vue').default },


    { path: '*', component: require('./components/NotFound.vue').default },
    { path: '/product', component: require('./components/ProductForm.vue').default }
  ]

  const router = new VueRouter({
      mode: 'history',
    routes // short for `routes: routes`
  })

  Vue.filter('upText', function(text){
    return text.charAt(0).toUpperCase() + text.slice(1)
});

Vue.filter('myDate',function(created){
    return moment(created).format('MMMM Do YYYY');
});

window.Fire =  new Vue();



Vue.component(
  'passport-clients',
  require('./components/passport/Clients.vue')
);

Vue.component(
  'passport-authorized-clients',
  require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
  'passport-personal-access-tokens',
  require('./components/passport/PersonalAccessTokens.vue')
);
Vue.component(
  'not-found',
  require('./components/NotFound.vue').default);


Vue.component('example-component', require('./components/ExampleComponent.vue').default);



const app = new Vue({
  el: '#app',
  router,
  data:{
      search: ''
  },
  methods:{
      searchit: _.debounce(() => {
          Fire.$emit('searching');
      },1000),

      printme() {
          window.print();
      }
  }
});
