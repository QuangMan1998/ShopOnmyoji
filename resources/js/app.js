
require('./bootstrap');

window.Vue = require('vue');

Vue.component('AppHome', require('./src/layouts/AppHome.vue').default);

const app = new Vue({
    el: '#app',
});
