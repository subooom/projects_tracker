@extends('layouts.app')
@section('content')
    <div class="container">
      <h2>Edit A Form</h2><br  />
        <form method="post" action="{{action('ProjectController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Project_ID:</label>
            <input type="id" class="form-control" name="id" value="{{$project->id}}>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Title:</label>
            <input type="text" class="form-control" name="name" value="{{$project->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="desc">Description:</label>
              <input type="text" class="form-control" name="desc" value="{{$project->desc}}">
            </div>
          </div>
       
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
    @endsection