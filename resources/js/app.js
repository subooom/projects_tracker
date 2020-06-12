/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require("./bootstrap");

import App from "./App.vue";
import router from "./routes/routes.js";
import VueRouter from "vue-router";

import { library } from "@fortawesome/fontawesome-svg-core";
import { faEnvelope } from "@fortawesome/free-solid-svg-icons";
import { faSave } from "@fortawesome/free-solid-svg-icons";
import { faKey } from "@fortawesome/free-solid-svg-icons";
import { faUser } from "@fortawesome/free-regular-svg-icons";
import { faGoogle } from "@fortawesome/free-brands-svg-icons";
import { faFacebook } from "@fortawesome/free-brands-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

library.add(faEnvelope);
library.add(faSave);
library.add(faGoogle);
library.add(faFacebook);
library.add(faUser);
library.add(faKey);


window.Vue = require("vue");

Vue.component("font-awesome-icon", FontAwesomeIcon);

Vue.use(VueRouter);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
    router, // short for `router: router`
    render: h => h(App)
});
