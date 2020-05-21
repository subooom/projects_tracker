
/**
 * Importing all the components that are needed.
 */

import Home from './Home.vue';
import SignUp from './SignUp.vue';
import Login from './Login.vue';
import About from './About.vue';


/**
 * Exporting a routes object composed of every route in this directory.
 */

export default [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/projects-tracker',
    name: 'projectsTracker',
    component: SignUp
  },
  {
    path: '/ktm-rock',
    name: 'ktmRock',
    component: SignUp
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