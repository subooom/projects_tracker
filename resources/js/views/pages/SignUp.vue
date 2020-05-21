<template>
    <div class="container-fluid" >
      <div class="sign-up-container">
        <img class="sign-up-bg" src="/img/phone-transparentp.png" alt="phone-image" />
        <div class="main-container">
          <h4 class="logo">paradiseinself</h4>
          <div class="promo-text">
            <h4>ONE</h4>
            <h4>DAY</h4>
            <h4>AT A</h4>
            <h3>TIME.</h3>
            <div class="button-container">

              <button>
                <font-awesome-icon :icon="['fas', 'envelope']" />
                <span>Email</span>
              </button>

              <GoogleLogin class="google-login-button" :params="params" :onSuccess="onGoogleLoginSuccess" :onFailure="onGoogleLoginFailure">
                <font-awesome-icon :icon="['fab', 'google']" />
                <span>Google</span>
              </GoogleLogin>

              <button>
                <font-awesome-icon :icon="['fab', 'facebook']" />
                <span>Facebook</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
  import GoogleLogin from 'vue-google-login';

    export default {
      name: 'SignUp',
      components: {
        GoogleLogin
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
                }
            }
      },
      methods: {
        onGoogleLoginSuccess(googleUser) {
          console.log(googleUser);

          console.log(googleUser.getBasicProfile());
        },
        onGoogleLoginFailure(err) {
          console.log(err);
        }
      }
    }
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
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
    left: 20px;
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
  .promo-text *{
    margin: 0;
    font-family: 'Roboto', sans-serif;
    line-height: 0.9;
  }
  .promo-text h4{
    color: #bbc4bd;
  }
  .button-container{
    margin-top:20px;
    width: 100%;
  }

  .button-container button{
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