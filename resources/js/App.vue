<template>
  <div id="app" class="page-body">
    <TheNavbar></TheNavbar>
    <router-view></router-view>

  </div>
</template>

<script>

import TheNavbar from './views/components/TheNavbar.vue'

export default {
  name: 'app',
  components: {
    TheNavbar
  }
}
</script>