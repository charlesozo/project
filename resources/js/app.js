import './bootstrap';
// resources/js/app.js

import Vue from 'vue';
import ProductAttributes from './components/ProductAttributes.vue';

new Vue({
  el: '#app',
  components: {
    ProductAttributes,
  },
});
