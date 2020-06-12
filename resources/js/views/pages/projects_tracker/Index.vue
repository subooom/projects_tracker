<template>
    <div class="main-content">
    </div>
</template>

<script>
    import {getLoggedInStatus} from './../../../models/users/manager'
    import LocalStorage from './../../../models/storage';

    export default {
      name: 'Index',
      beforeMount(){
        LocalStorage.set('app_mode', 'projects_tracker')
      },
      data(){
        return{
          user: {
            isLoggedIn: false
          },
        }
      },
      methods: {
        handleGoogleSignInSuccess(data){
          console.log(data)
        },
        handleGoogleSignInError(error){

        }
      }
    }
</script>