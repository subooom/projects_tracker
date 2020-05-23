<template>
    <div class="container">
      <SignUp></SignUp>
    </div>
</template>

<script>
    import UserManager from './../../../models/users/manager'
    import SignUp from  './../../components/users/SignUp';

    export default {
      name: 'Index',
      components: {
        SignUp
      },
      beforeMount(){
        UserManager();

      },
      data(){
        return{
          isLoggedIn: false
        }
      }
    }
</script>