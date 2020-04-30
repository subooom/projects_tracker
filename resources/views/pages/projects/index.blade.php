@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb" style="margin-top:15px">
      <div class="pull-left">
          <h5>Project Tracker</h5>
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

    <table class="table table-striped">
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
        
        <td><a href="{{action('ProjectController@edit', $project['project_id'])}}" class="btn btn-warning">Edit</a></td>
        {{-- <td>
          <form action="{{action('ProjecttController@destroy', $project['project_id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td> --}}
      </tr>
      @endforeach
    </tbody>
  </table>
 

@endsection

