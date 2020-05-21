/**
 * First we will load vue router
 */

import VueRouter from 'vue-router';

/**
 * Now importing all the components that are needed.
 */

import Home from './../views/pages/Home.vue';
import SignUp from './../views/pages/SignUp.vue';
import Login from './../views/pages/Login.vue';
import About from './../views/pages/About.vue';


// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/sign-up',
    name: 'signUp',
    component: SignUp
  },
  {
    path: '/login',
    name: 'login',
    component: Login
  },
  {
    path: '/about',
    name: 'about',
    component: About
  }
]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.

const router = new VueRouter({
  routes // short for `routes: routes`
})

export default router;