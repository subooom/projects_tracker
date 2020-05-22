<template>
    <div class="container-fluid" >
      <div class="sign-up-container">
        <img class="sign-up-bg" src="/img/phone-transparentp.png" alt="phone-image" />
        <div class="main-container">
          <h4 class="logo">paradiseinself</h4>
          <div class="promo-text">
            <h4>1</h4>
            <h4>DAY</h4>
            <h4>AT A</h4>
            <h3>TIME.</h3>
          </div>
          <div class="slider">
            <div class="slides">
              <div class="button-container">
                <button class="custom-button">
                  <font-awesome-icon :icon="['fas', 'envelope']" />
                  <span>Email</span>
                </button>

                <GoogleLogin class="google-login-button custom-button" :params="params" :onSuccess="onGoogleLoginSuccess" :onFailure="onGoogleLoginFailure">
                  <font-awesome-icon :icon="['fab', 'google']" />
                  <span>Google</span>
                </GoogleLogin>

                <button class="custom-button">
                  <font-awesome-icon :icon="['fab', 'facebook']" />
                  <span>Facebook</span>
                </button>
                <p class="sign-in-text">Already a member? <router-link to="{name:'login}">Sign in!</router-link></p>
              </div>
              <form class="username-form">
                <div class="input-group mb-3">
                  <span class="input-icon">
                    <font-awesome-icon :icon="['fas', 'envelope']" />
                  </span>
                  <input style="border:none" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="username input">
                </div>
                <div class="input-group mb-3">
                  <img src="newUser.SK" />
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="avatar">
                    <label class="custom-file-label" for="avatar">Choose Avatar</label>
                  </div>
                </div>
                <button class="custom-button">
                  <font-awesome-icon :icon="['fas', 'save']" />
                  <span>Save</span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
  import GoogleLogin from 'vue-google-login';
  import axios from 'axios';

    export default {
      name: 'SignUp',
      components: {
        GoogleLogin
      },
      mounted(){
        axios.get('/api/fetchAllUsers').then( (err, resp) => console.log(resp))
      },
      data() {
            return {
                params: {
                    client_id: "448902242353-ar6jfs6k8tl5vgo6dv8mvo9jn3cm7dkm.apps.googleusercontent.com"
                },
                renderParams: {
                    width: 250,
                    height: 50,
                    longtitle: true
                },
                newUser: {}
            }
      },
      methods: {
        onGoogleLoginSuccess(googleUser) {
          let slides = document.querySelector('.slides')
          slides.style.left = -(slides.children[0].clientWidth+4)+'px'

          this.newUser = googleUser.getBasicProfile();
        },
        onGoogleLoginFailure(err) {
          console.log(err);
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
    background-image: url('https://picsum.photos/1920/1080');
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
  .button-container button:hover{
    background: rgb(183, 220, 255);
  }
  .button-container button svg{
    position: absolute;
    left: 10px;
  }
  .button-container button span{
    font-weight: 600;
  }
</style>