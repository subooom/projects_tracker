<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Project</title>
  <link rel="stylesheet" href="/css/layouts/project.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  {{-- <link rel="stylesheet" href="/css/all.css"> --}}
  
@yield('css')
</head>
<body>
{{--
yo naya layout file ho eslai edit gar, side bar rakh, navbar ko satta, side bar ma chai Details, Tasks, Settings rakh, ani make the required pages and routes and etc
, yo chai show view ma aaucha yeild css, yeild scripts yeild section, ani aru css file haru sab link gar --}}


<div id="app"></div>

@include('includes.sidenav')

<div class="container-fluid">
    @yield('content')
</div>


<script src="https://kit.fontawesome.com/a076d05399.js"></script>

@yield('scripts')

</body>
</html>