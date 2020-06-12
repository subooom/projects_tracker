
/**
 * Importing all the components that are needed.
 */

import Home from './Home.vue';
import ProjectsTracker from './projects_tracker/Index.vue';
import About from './About.vue';
import Verify from './../components/auth/Verify.vue';

import LocalStorage from './../../models/storage';

/**
 * Exporting a routes object composed of every route in this directory.
 */

export default [
  {
    path: '/',
    name: 'home',
    component: Home,
    meta: { transitionName: 'slide' },
  },
  {
    path: '/verify',
    name: 'verify',
    component: Verify,
    meta: { transitionName: 'zoom' },
  },
  {
    path: '/projects-tracker',
    name: 'projectsTracker',
    component: ProjectsTracker,
    beforeEnter(to, from, next) {
      if (LocalStorage.get('user')['isLoggedIn']) {
        next()
      } else {
        next({
          name: "verify" // back to safety route //
        });
      }
    },
    meta: { transitionName: 'zoom' },
  },
  {
    path: '/about',
    name: 'about',
    component: About,
    meta: { transitionName: 'slide' },
  }
]