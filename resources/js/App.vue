<template>
  <div id="app" class="page-body">
    <!-- <LoadingScreen></LoadingScreen> -->
    <TheNavbar @onSignUpClick="signUpClicked" :show="showNavbar"></TheNavbar>
    <router-view></router-view>

  </div>
</template>

<script>

import TheNavbar from './views/components/TheNavbar.vue'
import LoadingScreen from './views/components/LoadingScreen.vue'

export default {
  name: 'app',
  components: {
    TheNavbar,
    LoadingScreen
  },
  data: function () {
    return {
      showNavbar: true
    }
  },
  methods : {
    signUpClicked(){
      this.showNavbar = false;
    }
  }
}
</script>