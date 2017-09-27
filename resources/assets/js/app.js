
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';
// import Turbolinks from 'turbolinks';

// Turbolinks.start();

UIkit.use(Icons);

window.Vue = require('vue');
window.UIkit = require('uikit');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('subscribe', require('./components/Subscribe.vue'));

const app = new Vue({
    el: '.wrapper',
    http: {
        emulateJSON: true,
        emulateHTTP: true
    }
});
