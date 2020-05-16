@extends('layouts.project')
@section('css')
<link rel="stylesheet" href="/css/erd/erd.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datedropper/2.0/datedropper.css">   
@endsection

@section('content')
<div class="container" >
    <div class="row" style="margin-top: 40px">

        <div class="col" style="margin-left:100px">
            <div class="date">
                <input  type="text" class="picker" data-large-mode="true" data-large-default="true" >
            </div>
        </div>

</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="datedropper/2.0/datedropper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datedropper/2.0/datedropper.min.js"></script>
<script>
    $('.picker').dateDropper();
</script>

@endsection