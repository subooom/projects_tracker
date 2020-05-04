
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
<link rel="stylesheet" href="/css/projects/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
{{--   
yo naya layout file ho eslai edit gar, side bar rakh, navbar ko satta, side bar ma chai Details, Tasks, Settings rakh, ani make the required pages and routes and etc
, yo chai show view ma aaucha yeild css, yeild scripts yeild section, ani aru css file haru sab link gar --}}

<input type="checkbox" id="check">
<label for="check">
  <i class="fas fa-bars" id="btn"></i>
  
  <i class="fas fa-times" id="cancel"></i>
</label>

<div class="sidebar">
  <header> PROJECT</header>
  <a class="active" href="#"><i class="fas fa-info-circle"></i><span>Details</span></a>
  
  <a href="#"><i class="fas fa-tasks"></i><span>Tasks</span></a>
  
  <a href="#"><i class="fas fa-cogs"></i><span>Settings</span></a>
  </div>
 
  <div class="container-fluid">
   
    @yield('content')

</div>


@yield('scripts')

</body>
</html>