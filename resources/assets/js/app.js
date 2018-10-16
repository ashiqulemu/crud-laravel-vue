


require('./bootstrap');

window.Vue = require('vue');

    // my golbal component

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('header-component', require('./components/global/header.vue'));
Vue.component('sidebar-component', require('./components/global/sidebar.vue'));
Vue.component('footer-component', require('./components/global/footer.vue'));
// Vue.component('form-global', require('./components/global/formGlobal'));


import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

// my local component

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: require('./components/views/home.vue')
        },
        {
            path: '/information/:id/edit',
            name: 'edit',
            component: require('./components/views/edit.vue')
        },

        {
            path: 'about',
            name: 'about',
            component: require('./components/views/about.vue')
        },
        {
            path: 'contact',
            name: 'contact',
            component: require('./components/views/contact.vue')
        },
        {
            path: 'show',
            name: 'showData',
            component: require('./components/views/showData.vue')
        },
    ],
});


new Vue({
    el: '#app',
    router,
});
