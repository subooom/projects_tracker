<template>
  <div id="app" class="page-body">

    <ParadiseInSelfNavbar v-show="appMode==='paradiseinself'"></ParadiseInSelfNavbar>

    <!-- <LoadingScreen></LoadingScreen> -->
    <ProjectsTrackerSideBar v-show="appMode==='projects_tracker'"></ProjectsTrackerSideBar>
    <transition
        :name="transitionName"
        :mode="transitionMode"
        :enter-active-class="transitionEnterActiveClass">
      <router-view></router-view>
    </transition>

  </div>
</template>

<script>

import ParadiseInSelfNavbar from './views/components/ParadiseInSelfNavbar.vue'
import ProjectsTrackerSideBar from './views/components/ProjectsTrackerSideBar.vue'
import LoadingScreen from './views/components/LoadingScreen.vue'

import LocalStorage from './models/storage'
const DEFAULT_TRANSITION = 'fade';
const DEFAULT_TRANSITION_MODE = 'out-in';



export default {
  name: 'app',
  components: {
    ParadiseInSelfNavbar,
    ProjectsTrackerSideBar,
    LoadingScreen
  },
   created() {
     this.$router.beforeEach((to, from, next) => {
        let transitionName = to.meta.transitionName || from.meta.transitionName || DEFAULT_TRANSITION;

        if (transitionName === 'slide') {
          const toDepth = to.path.split('/').length;
          const fromDepth = from.path.split('/').length;
          transitionName = toDepth < fromDepth ? 'slide-right' : 'slide-left';
        }

        this.transitionMode = DEFAULT_TRANSITION_MODE;
        this.transitionEnterActiveClass = `${transitionName}-enter-active`;

        if (to.meta.transitionName === 'zoom') {
          this.transitionMode = 'in-out';
          this.transitionEnterActiveClass = 'zoom-enter-active';
          // Disable scrolling in the background.
          document.body.style.overflow = 'hidden';
        }

        if (from.meta.transitionName === 'zoom') {
          this.transitionMode = null;
          this.transitionEnterActiveClass = null;
          // Enable scrolling again.
          document.body.style.overflow = null;
        }

        this.transitionName = transitionName;

        next();
     });
   },
  beforeMount(){
    LocalStorage.set('app_mode', 'paradiseinself');

    this.timer = setInterval(() => {
      const newVal = LocalStorage.get('app_mode');
      if (newVal !== this.appMode) {
        this.appMode = newVal
        console.log(newVal)
      }
    }, 1000);
  },
  beforeDestroy() {
    cleaInterval(this.timer)
  },
  data: function () {
    return {
      showNavbar: true,
      timer: null,
      appMode: 'paradiseinself',
      prevHeight: 0,
      transitionName: DEFAULT_TRANSITION,
      transitionMode: DEFAULT_TRANSITION_MODE,
      transitionEnterActiveClass: '',
    }
  }
}
</script>

<style scoped>
  .slide-left-enter-active,
  .slide-left-leave-active,
  .slide-right-enter-active,
  .slide-right-leave-active {
    transition-duration: 0.5s;
    transition-property: height, opacity, transform;
    transition-timing-function: cubic-bezier(0.55, 0, 0.1, 1);
    overflow: hidden;
  }

  .slide-left-enter,
  .slide-right-leave-active {
    opacity: 0;
    transform: translate(2em, 0);
  }

  .slide-left-leave-active,
  .slide-right-enter {
    opacity: 0;
    transform: translate(-2em, 0);
  }
  .zoom-enter-active,
  .zoom-leave-active {
    animation-duration: 0.5s;
    animation-fill-mode: both;
    animation-name: zoom;
  }

  .zoom-leave-active {
    animation-direction: reverse;
  }

  @keyframes zoom {
    from {
      opacity: 0;
      transform: scale3d(0.3, 0.3, 0.3);
    }

    100% {
      opacity: 1;
    }
  }
</style>