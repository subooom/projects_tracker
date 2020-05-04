@extends('layouts.app')
@section('content')
<div class="container " >
<div class="row">
    <div class="col-lg-12 margin-tb "style=" margin-top: 50px">
        <div class="pull-left">
            <h4>Edit a Project</h4>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="/">Back</a>
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

<form action={{url('update'), '$project->project_id' }}method="POST">
    @csrf
    <div class="container">
    <div class="row">
        <div class=" col-md-6 ">
        <div class="form-group ">
          <strong>Title:</strong>
          <input class="form-control"  tyep="text" name="title" value="{{'$project->title'}}" placeholder="Title">
        </div>
      </div>
    </div>
      <div class="row">  
        <div class=" col-md-6 ">
          <div class="form-group">
            <strong>Description:</strong>
          <textarea class="form-control" name="description" value="{{'$project->description'}}" style="height:150px" placeholder="Description"></textarea>
          </div>
        </div>
      </div>
      </div>
      <div class="row">    
        <div class="col-md-6 " text="center" style="left:125px">  
            <div class="form-group">
          <button type="submit" class="btn btn-success">UPDATE</button>
         </div>
    </div>
</div>
</div>
</form>
</div>

@endsection