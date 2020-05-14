<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Project</title>
  <link rel="stylesheet" href="/css/includes/sidenav.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/all.css">

  @yield('css')
</head>
<body style="background: #261e56">

  <div style="display: flex;">

    @include('includes.sidenav')

    <div class="main-content">
      @yield('content')
    </div>
  </div>


  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  @yield('scripts')

  <script>

    window.onload = function(){
      let sidenav = document.querySelectorAll('.side-nav-container')[0];
      let logoDiv = document.querySelectorAll('.logo-panel')[0];
      let content = document.querySelectorAll('.main-content')[0];

      updateMainDiv();

      function updateMainDiv(){
        content.style.width= window.innerWidth - sidenav.style.width.replace('px', '') + 'px'
      }

      logoDiv.addEventListener('mouseenter', e => {
        sidenav.style.width = 200+'px';
        updateMainDiv();
      })
      sidenav.addEventListener('mouseleave', e => {
        sidenav.style.width = 60+'px';
        updateMainDiv();
      })
    }
  </script>

</body>
</html>