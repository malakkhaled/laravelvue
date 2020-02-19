/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);




/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('navbar-component', require('./components/global/NavbarComponent.vue').default);
Vue.component('footer-component', require('./components/global/FooterComponent.vue').default);
Vue.component('slider-component', require('./components/pages/home/SliderComponent.vue').default);
Vue.component('info-component', require('./components/pages/home/InfoComponent.vue').default);
Vue.component('new-component', require('./components/pages/home/NewComponent.vue').default);
Vue.component('brand-component', require('./components/pages/brands/BrandComponent.vue').default);
Vue.component('women-component', require('./components/pages/women/WslideComponent.vue').default);
Vue.component('product-component', require('./components/global/ProductComponent.vue').default);
Vue.component('men-component', require('./components/pages/men/MslideComponent.vue').default);
Vue.component('child-component', require('./components/pages/children/ChildslideComponent.vue').default);
Vue.component('aslide-component', require('./components/pages/accessories/AslideComponent.vue').default);
Vue.component('aboutslide-component', require('./components/pages/about/AboutslideComponent.vue').default);
Vue.component('ainfo-component', require('./components/pages/about/AinfoComponent.vue').default);
Vue.component('pay-component', require('./components/pages/about/PayComponent.vue').default);
Vue.component('cslide-component', require('./components/pages/contact/CslideComponent.vue').default);
Vue.component('form-component', require('./components/pages/contact/FormComponent.vue').default);
Vue.component('products-component', require('./components/pages/product/ProductsComponent.vue').default);
Vue.component('relatedpro-component', require('./components/pages/product/RelatedproComponent.vue').default);
Vue.component('wish-component', require('./components/pages/product/wishComponent.vue').default);
Vue.component('cartslide-component', require('./components/pages/cart/CartslideComponent.vue').default);
Vue.component('cartitems-component', require('./components/pages/cart/CartitemsComponent.vue').default);
Vue.component('checkoutslide-component', require('./components/pages/checkout/CheckoutslideComponent.vue').default);
Vue.component('checkout-component', require('./components/pages/checkout/CheckoutComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
