@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="/css/projects/index.css">
@stop

@section('content')

<div class="row">
    <div class="col-lg-12 projects-header">
        <h5>PROJECTS</h5>
        <a class="btn btn-success" href="/create">Create New Project</a>
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
            <th>Created On</th>
            <th>Last Edited On</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr class="project-item" data-id="{{$project->project_id}}">
            <td data-id="{{$project->project_id}}">{{ $project->project_id}}</td>
            <td data-id="{{$project->project_id}}">{{$project->title}}</td>
            <td data-id="{{$project->project_id}}">{{$project->description}}</td>
            <td data-id="{{$project->project_id}}">{{$project->created_at->format('d M Y')}}</td>
            <td data-id="{{$project->project_id}}">{{$project->updated_at->format('d M Y')}}</td>
            <td class="project-item-actions" data-id="{{$project->project_id}}">
                <a style="margin-right: 5px" href="{{action('ProjectController@edit', $project['project_id'])}}"
                  class="btn btn-warning">Edit</a>
                <form action="{{action('ProjectController@destroy', $project['project_id'])}}" method="post">


                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<br />
{{ $projects->links() }}

@endsection

@section('scripts')
  <script>
    document.querySelectorAll('.project-item').forEach( elem => elem.addEventListener('click', e => window.location.replace("/show/"+e.target.dataset.id)))
  </script>
@stop