
require('./bootstrap');

window.Vue = require('vue');

import router from './router';

Vue.component('AppHome', require('./src/layouts/AppHome.vue').default);

const app = new Vue({
    el: '#app',
    router
});

require('./scrollpage');
