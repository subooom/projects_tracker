 @extends('layouts.project')
 @section('css') 
 @section('content')
<link rel="stylesheet" href="/css/details/detail.css"> 
<link href="https://bootswatch.com/4/cyborg/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.4.1/cyborg/bootstrap.min.css" integrity="sha256-o+ChunZSxivN1Kvg6Xr6ihSmMp2qCqKw6u+sKB/BaOk=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
<div class="row" >
    <div class="col-lg-12 margin-tb" style="margin-top: 50px">
        <div class="pull-left">
            <h4> Projects Details</h4>
        </div>
        <div class="pull-right">
            <a class="btn btn-outline-info" href="/">Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="form-group ">
      <strong>Title:</strong>
      {{ $project->title }}

    </div>
  </div>
</div> 
 <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="form-group">
        <strong>Description:</strong>
        {{ $project->description }}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="form-group">
        <strong>Git_Url:</strong>
        {{ $project->git_url }}
      </div>
    </div>
  </div> 
  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="form-group">
        <strong>TimeFrame:</strong>
        {{ $project->timeframe }}
      </div>
    </div>
  </div>
</div>


@endsection
@section('scripts')
<script>
// alert('show')
</script>