
/**
 * Importing all the components that are needed.
 */

import Home from './Home.vue';
import ProjectsTracker from './projects_tracker/Index.vue';
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
    component: ProjectsTracker
  },
  {
    path: '/about',
    name: 'about',
    component: About
  }
]