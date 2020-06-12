<template>
  <div class="side-nav-container">
    <div class="side-nav">
      <div class="logo-panel">
        <img class="logo" src="/logo/logo_icon.png" />
        <h2 class="project-title">Projects Tracker</h2>
      </div>
      <div class="nav-links">
        <a class="active" href="/details"><i class="fa fa-info-circle"></i><span>Details</span></a>
        <a href="/progress"><i class="fa fa-chart-line"></i><span>Progress</span></a>
        <a href="/erd"><i class="fa fa-project-diagram"></i><span>ERD</span></a>
        <a href="/task"><i class="fa fa-tasks"></i><span>Tasks</span></a>
        <a href="/settings"><i class="fa fa-cogs"></i><span>Settings</span></a>
        <a href="//vision"><i class="far fa-eye"></i><span>Vision</span></a>
      </div>
    </div>
  </div>
</template>

<style scoped>
.side-nav-container{
  width: 60px;
  overflow: hidden;
  transition: width .4s cubic-bezier(0.075, 0.82, 0.165, 1)
}
/*  */
.side-nav{
  background: #261e56;
  z-index: -1;
  display: flex;
  flex-direction: column;
  width: 200px;
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
}
.logo-panel{
  margin: 10px 0;
  display: flex;
  flex-direction: row;
  cursor: pointer;
  align-items: center;
}

.logo-panel .logo{
  height: 60px;
}

.logo-panel .project-title{
  font-size: 20px;
  color: white;
  margin-left: 15px;
}

.side-nav>.nav-links{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin: 30px 0;
}

.side-nav .nav-links > a{
  padding: 10px 0;
  text-decoration: none;
  color: #655f86;
  width: 100%;
  display: flex;
  align-items: center;
}


.side-nav .nav-links > a:not(.active):hover{
  background: rgba(0,0,0,.2)
}


.side-nav .nav-links a>i{
  font-size: 20px;
  padding: 0 20px;
}
.side-nav .nav-links a.active{
  font-size: 20px;
  color: white;
}
</style>

<script>




  export default {
    name: "ProjectsTrackerSideBar",
    mounted(){
      let sidenav = document.querySelectorAll('.side-nav-container')[0];
      let logoDiv = document.querySelectorAll('.logo-panel')[0];
      let content = document.querySelectorAll('.main-content')[0];
      // let loader = document.querySelectorAll('.loader-container')[0];

      console.log(content)

      // setTimeout(_=>{
      //   loader.remove()
      // }, 2000)
      content.style.zIndex = 2;

      updateMainDiv();

      function updateMainDiv(){
        content.style.width= window.innerWidth - sidenav.style.width.replace('px', '') + 'px'
      }

      sidenav.addEventListener('mouseenter', e => {
        sidenav.style.width = 200+'px';
        sidenav.style.zIndex = 3;
        updateMainDiv();
      })
      sidenav.addEventListener('mouseleave', e => {
        sidenav.style.zIndex = 0;
        sidenav.style.width = 60+'px';
        updateMainDiv();
      })
    }
  }
</script>