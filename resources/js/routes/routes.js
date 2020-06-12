/**
 * First we will load vue router
 */

import VueRouter from 'vue-router';
import pagesRoutes from './../views/pages/routes.js'
import projectsTrackerRoutes from './../views/pages/projects_tracker/routes.js'

// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.

const routes = [...pagesRoutes, ...projectsTrackerRoutes]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.

const router = new VueRouter({
  routes // short for `routes: routes`
})

export default router;