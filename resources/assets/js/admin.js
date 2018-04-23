/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
//Vue plugins
window.Vue = require('vue');
import VueRouter from 'vue-router';
window.VueRouter=VueRouter;
Vue.use(VueRouter);
import VueUp from 'vueup';
Vue.use(VueUp);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const Navbar=require('./components/admin/Navbar.vue');
const PostForm=require('./components/admin/PostForm.vue');
const Dashboard=require('./components/admin/Dashboard.vue');
const Featured=require('./components/admin/Featured.vue');
require('./shared');
Vue.component('navbar',Navbar );
Vue.component('post-form',PostForm );
Vue.component('dashboard', Dashboard);
Vue.component('featured', Featured);
const router = new VueRouter({
    mode: 'hash',
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
        {path: '/admin/dashboard', title: 'Dashboard', color: 'cyan', icon: 'home', component: Dashboard},
        {path: '/admin/featured', title: 'Featured', color: 'orange', icon: 'star', component:Featured},
        {path: '/admin/apps', title: 'Apps', color: 'fuchsia', icon: 'mobile-alt'},
        {path: '/admin/services', title: 'Services', color: 'fuchsia', icon: 'cog'},
        {path: '/admin/team', title: 'Team', color: 'purple', icon: 'users'},
        {path: '/admin/contact', title: 'Contact', color: 'greenyellow', icon: 'envelope'},
    ]
});
const app = new Vue({
    el: "#app",
    router
});