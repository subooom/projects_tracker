@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit a Project</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('pages.projects.index')}}">Back</a>
        </div>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>
        Whoops!
    </strong>There were some problems with your input.<br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>
@endif

<form action={{route('pages.projects.update','$project->project_id')}} method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12">
        <div class="form-group ">
          <strong>Title:</strong>
          <input type="text" class="form-control"   name="title" value="{{'$project->title'}}" placeholder="Title">
        </div>
      </div>
    </div>
      <div class="row">  
        <div class="col-xs-12 col-md-12 col-sm-12">
          <div class="form-group">
            <strong>Description:</strong>
          <textarea class="form-control" name="description" value="{{'$project->description'}}" style="height:150px" placeholder="Description"></textarea>
          </div>
        </div>
      </div>
      </div>
      <div class="row">    
        <div class="col-xs-12 col-md-12 col-sm-12" text="center" style="left:200px">  
            <div class="form-group">
          <button type="submit" class="btn btn-success">Submit</button>
         </div>
    </div>
</div>
</form>
@endsection