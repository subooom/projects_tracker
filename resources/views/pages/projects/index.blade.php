@extends('layouts.app')
@section('content')
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
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
      
      @foreach($errors as $project)
    
      <tr>
        <td>{{$project['project_id']}}</td>
        <td>{{$project['title']}}</td>
        <td>{{$project['description']}}</td>
        
        <td><a href="{{action('ProjectController@edit', $project['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ProjecttController@destroy', $project['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection

