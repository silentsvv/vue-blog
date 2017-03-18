// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import Article from './components/Article/Article'
import Index from './components/Index/index'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import AddArticle from './components/Admin/Add/addArticle'

Vue.use(VueRouter)
Vue.use(VueResource)

global.url = '';
// global.url = 'http://localhost/vue-blog';

const routes = [{
  path: '/',
  redirect: to => {
    return '/index'
  },
  component: App,
  children: [
    {path: '/index', component: Index},
    {path: '/article', component: Article},
    {path: '/article/:id', name: 'article',component: Article},
    {path: '/add', component: AddArticle}
  ]}
]

const router = new VueRouter({
  routes,
  linkActiveClass: 'active'
})

new Vue({
  router
}).$mount('#app')
