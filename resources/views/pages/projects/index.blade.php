@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb" style="margin-top:15px">
      <div class="pull-left">
          <h5>PROJECTS</h5>
      </div>

      <div class="pull-right">
          <a class="btn btn-success" href="/create">Create New Project</a>
      </div>
  </div>
</div>


@if ($message=Session::get('success'))

<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif

    <table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th>Project_ID</th>
        <th>Title</th>
        <th>Description</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($projects as $project)
   <tr>
   <td>{{ $project->project_id}}</td>
   <td>{{$project->title}}</td>
    <td>{{$project->description}}</td>  
        <td>
          <form action="{{action('ProjectController@destroy', $project['project_id'])}}" method="post">
           
        <a href="{{action('ProjectController@edit', $project['project_id'])}}" class="btn btn-warning">Edit</a>
        
        <a href="{{action('ProjectController@show', $project['project_id'])}}" class="btn btn-warning">Show</a>
        @csrf
          <button type= "submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
 <br/>
{{ $projects->links() }}

@endsection

