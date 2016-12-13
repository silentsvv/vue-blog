// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import Article from './components/Article/Article'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [{
  path: '/',
  component: App,
  children: [
    {path: '/article', component: Article}
  ]}
]

const router = new VueRouter({
  routes,
  linkActiveClass: 'active'
})

new Vue({
  router
}).$mount('#app')
