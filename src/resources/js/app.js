import Vue from 'vue';
import router from './router';
import App from './App.vue';

new Vue({
    el: '#app',
    router, // define router
    components: { App }, // declare using root component
    template: '<App />' // render root component
})
