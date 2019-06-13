/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components_app to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('auth-block', require('./components_app/accounts/AccountAuthBlock'));
Vue.component('vk-auth-block', require('./components_app/accounts/VkBlock'));
Vue.component('vk-authorized', require('./components_app/accounts/VkAuthorized'));
//
// Vue.component('main-view', require('./components_app/home/MainView'));
// Vue.component('vk-view', require('./components_app/home/VkView'));
// Vue.component('tg-view', require('./components_app/home/TgView'));
// Vue.component('vb-view', require('./components_app/home/VbView'));
// Vue.component('ig-view', require('./components_app/home/IgView'));
// Vue.component('wa-view', require('./components_app/home/WaView'));
// Vue.component('fb-view', require('./components_app/home/FbView'));

/**
 * LANDING!!!
 */
Vue.component('first-screen', require('./components/landing/index/screen-1'));
Vue.component('second-screen', require('./components/landing/index/screen-2'));
Vue.component('auth-section', require('./components/landing/index/auth-form'));

/**
 * Admin Panel
 */
Vue.component('reviews', require('./adminConponents/reviews'));
Vue.component('news', require('./adminConponents/news'));
Vue.component('updates', require('./adminConponents/updates'));
Vue.component('admin-menu', require('./adminConponents/admin-menu'));

const app = new Vue({
    el: '#app'
});
