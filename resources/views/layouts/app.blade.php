<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Progress Tracker</title>

     <!-- Styles -->
     <link href="https://bootswatch.com/4/cyborg/bootstrap.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.4.1/cyborg/bootstrap.min.css" integrity="sha256-o+ChunZSxivN1Kvg6Xr6ihSmMp2qCqKw6u+sKB/BaOk=" crossorigin="anonymous" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="/dependencies/icomoon/style.css">
 
     <link rel="stylesheet" href="/css/bootstrap-undoer.css">
     <link rel="stylesheet" href="/css/all.css">

    @yield('css')

</head>
<body>
    <div id="app"></div>

    @include('includes.navbar')

    <div class="container-fluid">
        @yield('content')
    </div > 

    @yield('scripts')
</body>
</html>