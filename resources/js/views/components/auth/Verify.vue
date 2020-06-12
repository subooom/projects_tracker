<template>
    <div class="container-fluid" >
      <div class="sign-up-container">
        <img class="sign-up-bg" src="/img/phone-transparentp.png" alt="phone-image" />
        <div class="main-container">
          <h4 class="logo"><router-link :to="{name: 'home'}">paradiseinself</router-link></h4>
          <div class="promo-text">
            <h4>1</h4>
            <h4>DAY</h4>
            <h4>AT A</h4>
            <h3>TIME.</h3>
          </div>
          <div class="slider">
            <div class="slides">
              <div class="button-container">
                <button class="custom-button" @click="onEmailModeClick">
                  <font-awesome-icon :icon="['fas', 'envelope']" />
                  <span>Email</span>
                </button>

                <GoogleLogin class="google-login-button custom-button" :params="params" :onSuccess="onGoogleLoginSuccess" :onFailure="onGoogleLoginFailure">
                  <font-awesome-icon :icon="['fab', 'google']" />
                  <span>Google</span>
                </GoogleLogin>

                <button class="custom-button" v-facebook-login-button="appId" OnFacebookAuthSuccess="OnFacebookAuthSuccess"
  version="3.1" OnFacebookAuthFail="OnFacebookAuthFail">


                  <font-awesome-icon :icon="['fab', 'facebook']" />
                  <span>Facebook</span>
                </button>
                <p class="sign-in-text">Already a member? <router-link to="{name:'login}">Sign in!</router-link></p>
              </div>

              <form class="username-form">
                <div class="input-group mb-3" v-if="isCurrentNewUser && !isEmailMode">
                  <span class="input-icon">
                    <font-awesome-icon :icon="['far', 'user']" />
                  </span>
                  <input style="border:none" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="username input">
                </div>
                <div class="input-group mb-3" v-if="isCurrentNewUser && !isEmailMode">
                  <span class="input-icon">
                    <font-awesome-icon :icon="['fas', 'key']" />
                  </span>
                  <input style="border:none" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="Password input">
                </div>
                <div class="input-group mb-3" v-if="isCurrentNewUser && isEmailMode">
                  <span class="input-icon">
                    <font-awesome-icon :icon="['fas', 'key']" />
                  </span>
                  <input style="border:none" type="password" class="form-control" placeholder="Confirm password" aria-label="Confirm password" aria-describedby="Confirm password input">
                </div>
                <button class="custom-button register-button" v-if="isCurrentNewUser && isEmailMode">
                  <font-awesome-icon :icon="['fas', 'save']" />
                  <span>Save</span>
                </button>
                <button class="custom-button login-button" v-if="!isCurrentNewUser && isEmailMode">
                  <font-awesome-icon :icon="['fas', 'save']" />
                  <span>Log in</span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import GoogleLogin from 'vue-google-login';
    import FacebookLoginButton from 'vue-facebook-login-button-directive';
    import LocalStorage from './../../../models/storage'

    import UserManager from './../../../models/users/manager'

    export default {
      name: 'Verify',
      directives: {
        FacebookLoginButton
      },
      components: {
        GoogleLogin
      },
      beforeMount(){
      },
      mounted(){
        axios.get('/api/users/fetch-all-users').then( (resp, err) => console.log(resp))
      },
      data() {
            return {
                appId: '1776597955816564',
                params: {
                    client_id: "448902242353-ar6jfs6k8tl5vgo6dv8mvo9jn3cm7dkm.apps.googleusercontent.com"
                },
                renderParams: {
                    width: 250,
                    height: 50,
                    longtitle: true
                },
                user: {},
                isCurrentNewUser: false,
                isEmailMode: false,
            }
      },
      methods: {
        onEmailModeClick(){
          this.isEmailMode = true;
          this.isCurrentNewUser = false;
          this.slideToLoginSection('To Your', 'Projects Tracker');
        },
        slideToLoginSection(top_text, bottom_text){
          let slides = document.querySelector('.slides')
          slides.style.left = -(slides.children[0].clientWidth+4)+'px'
          document.querySelector('.promo-text').style.marginTop = 20 + 'px';
          document.querySelector('.promo-text').children[0].innerHTML = 'Welcome,';
          document.querySelector('.promo-text').children[1].innerHTML = '';
          document.querySelector('.promo-text').children[2].innerHTML = top_text;
          document.querySelector('.promo-text').children[3].innerHTML = bottom_text+'!';

        },
        async checkIfNewUser()
        {
          this.isCurrentNewUser = await UserManager.isNewUser(this.user.email)
          if(!this.isCurrentNewUser) {
            this.user.isLoggedIn = true;
            LocalStorage.set('user', this.user);
            this.$router.replace("/projects-tracker/details");
          }

        },
        OnFacebookAuthSuccess(idToken) {
          console.log(idToken)
          // Receive the idToken and make your magic with the backend
        },
        OnFacebookAuthFail(error) {
          console.log(error)
        },
        onGoogleLoginSuccess(googleUser) {
          this.slideToLoginSection(googleUser.getBasicProfile().sW, googleUser.getBasicProfile().tU);

          let user = googleUser.getBasicProfile();

          this.user.name = user.Bd
          this.user.email = user.Du
          this.user.avatar = user.SK
          this.checkIfNewUser()



          this.$emit('onGoogleSignInSuccess', this.user)
        },
        onGoogleLoginFailure(err) {
          this.$emit('onGoogleSignInError', err)
        }
      }
    }
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
    .input-group{
      border-radius: 20px !important;
      overflow: hidden;
    }
    .logo a{
      color: white;
    }
    .logo a:hover{
      text-decoration: none;
    }
    .sign-in-text{
      color: white;
      text-align: center;
      line-height: 1;
    }
    .sign-in-text a{
      text-decoration: underline;
      color: white;
    }
    .input-icon{
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 8px;
      background: white;
    }
  .container-fluid {
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-image: url('/img/bg.jpg');
    background-size: cover;
  }
  .sign-up-container{
    position: relative;
  }
  .sign-up-bg{
    backdrop-filter: blur(2px) grayscale(2%);
    width: 235px;
  }
  .main-container{
    position: absolute;
    top: 50px;
    left: 5px;
    padding: 0 18px;
  }
  .logo,
  .promo-text *{
    text-shadow: 1px 1px #000000 2px;
  }
  .promo-text{
    margin-top: 70px;
    transition: margin-top .3s cubic-bezier(0.250, 0.460, 0.450, 0.940);
    display: flex;
    flex-direction: column;
  }
  .promo-text h4,
  .promo-text h3{
    margin: 0;
    font-family: 'Roboto', sans-serif;
    line-height: 0.9;
  }
  .promo-text h4{
    color: #e1e1e1;
  }
  .slider{
    position: relative;
    overflow: hidden;
  }
  .slider .slides{
    display: flex;
    transition: .3s left cubic-bezier(0.250, 0.460, 0.450, 0.940);
    position: relative;
    flex-direction: row;
    left: 0;
    width: 200%;
  }
  .button-container,
  .username-form{
    margin-top:20px;
    margin-right: 5px;
    width: 90%;
  }
  .custom-button{
    width: 100%;
    height: 30px;
    border-radius: 20px !important;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    margin-bottom: 10px;
    background: white;
    transition: .3s background ease-in;
  }
  .custom-button:hover{
    background: rgb(183, 220, 255);
  }
  .custom-button svg{
    transition: .3s color ease-in;
    color: #adafae;
    position: absolute;
    left: 10px;
  }
  .custom-button:hover svg{
    color: black;
  }
  .custom-button span{
    font-weight: 600;
  }
</style>