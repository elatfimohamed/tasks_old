/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import './bootstrap'
import 'material-design-icons-iconfont/dist/material-design-icons.css'
import ExempleComponent from './components/ExampleComponent.vue'
import Tasks from './components/Tasks.vue'

require('./bootstrap')

// ES6/VUE/BABEL -> imports
// window OCO en browser Objecte global
window.Vue = Vue

window.Vue.use(Vuetify)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', ExempleComponent)
Vue.component('tasks', Tasks)

const app = new Vue({
  el: '#app',
  data: () => ({
    drawer: null
  }),
  props: {
    source: String
  }
})
