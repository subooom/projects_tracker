<template>
    <div class="navbar">
      <router-link :to="{ name: 'home' }">Home</router-link>
      <router-link :to="{ name: 'signUp' }">Sign Up</router-link>
      <router-link :to="{ name: 'login' }">Login</router-link>
      <router-link :to="{ name: 'about' }">|About</router-link>
    </div>
</template>

<script>
    export default {
      name: 'TheNavBar'
    }
</script>
