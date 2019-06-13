require('./bootstrap');

window.Vue = require('vue');

/**
* Admin Panel
*/
Vue.component('reviews', require('./adminConponents/reviews'));
Vue.component('news', require('./adminConponents/news'));
Vue.component('updates', require('./adminConponents/updates'));

const app = new Vue({
    el: '#admin_app'
});