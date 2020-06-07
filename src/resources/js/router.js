import Vue from 'vue';
import VueRouter from 'vue-router';

// import page components
import Gallery from './pages/Gallery.vue';
import Login from './pages/Login.vue';

// enable Vue router
Vue.use(VueRouter)

// mapping path and component
const routes = [
    {
        path: '/',
        component: Gallery
    },
    {
        path: '/login',
        component: Login
    }
]

// create Vue Router instance
const router = new VueRouter({
    mode: 'history', // disable # in the URL
    routes
})

// export instance with VueRouter to import in app.js
export default router
