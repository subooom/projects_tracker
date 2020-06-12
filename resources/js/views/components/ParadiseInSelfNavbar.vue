<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <router-link class="nav-link" :to="{ name: 'home' }" exact>Home</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" :to="{ name: 'projectsTracker' }">Projects Tracker</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" :to="{ name: 'jodGhatau' }">Jod Ghatau</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" :to="{ name: 'ktmRock' }">KTM Rock</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" :to="{ name: 'signUp' }">Sign Up</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" :to="{ name: 'login' }">Login</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" :to="{ name: 'about' }">About</router-link>
        </li>
      </ul>
      </div>
      <h2>paradiseinself</h2>
    </nav>
</template>

<script>
    export default {
      name: 'TheNavBar',
      props: {
        show: true
      }
    }
</script>
