/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
window.VueRouter=VueRouter;
Vue.use(VueRouter);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('navbar', require('./components/app/Navbar.vue'));
const router = new VueRouter({
    mode: 'history',
    scrollBehavior: function (to, from, savedPosition) {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                if (to.hash) {
                    resolve({selector: to.hash});
                } else {
                    resolve({x: 0, y: 0});
                }
            }, 500)
        })
    },
    routes: [
        //{path: '/', component: abcView},
        // your routes
        {path: '#home', title: 'Home', color: 'cyan', icon: 'home'},
        {path: '#apps', title: 'Apps', color: 'orange', icon: 'mobile-alt'},
        {path: '#services', title: 'Services', color: 'fuchsia', icon: 'cog'},
        {path: '#team', title: 'Team', color: 'purple', icon: 'users'},
        {path: '#contact', title: 'Contact', color: 'greenyellow', icon: 'envelope'},
    ]
});
const app = new Vue({
    el: "#app",
    router
});
