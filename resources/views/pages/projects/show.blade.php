@extends('layouts.project')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb" style="margin-top: 50px">
        <div class="pull-left">
            <h4>Show Project</h4>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="/">Back</a>
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
  </div>

@endsection