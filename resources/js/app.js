require('./bootstrap');


window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleCamponent.vue').default);

const app = new Vue({
    el:'#app',

    data(){
        
    }
});