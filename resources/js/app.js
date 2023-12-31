require('./bootstrap');

import Vue from 'vue';
import SortSelector from './components/SortSelector.vue';

Vue.component('sort-selector', SortSelector);

const app = new Vue({
    el: '#app',
});