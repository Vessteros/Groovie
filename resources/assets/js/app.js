/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('auth-block', require('./components/accounts/AccountAuthBlock'));
Vue.component('vk-auth-block', require('./components/accounts/VkBlock'));
Vue.component('vk-authorized', require('./components/accounts/VkAuthorized'));

Vue.component('main-view', require('./components/home/MainView'));
Vue.component('vk-view', require('./components/home/VkView'));
Vue.component('tg-view', require('./components/home/TgView'));
Vue.component('vb-view', require('./components/home/VbView'));
Vue.component('ig-view', require('./components/home/IgView'));
Vue.component('wa-view', require('./components/home/WaView'));
Vue.component('fb-view', require('./components/home/FbView'));

const app = new Vue({
    el: '#app'
});
