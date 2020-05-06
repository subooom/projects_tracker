@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="/css/projects/index.css">
@stop

@section('content')

<div class="row">
    <div class="col-lg-12 projects-header">
        <h5>PROJECTS</h5>
        <a class="btn btn-success" href="/create-project">Create New Project</a>
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
            <th>Slug</th>
            {{-- <th colspan="2">Action</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr class="project-item" data-id="{{$project->project_id}}" data-slug="{{$project->slug}}">
            <td data-id="{{$project->project_id}}" data-slug="{{$project->slug}}">{{ $project->project_id}}</td>
            <td data-id="{{$project->project_id}}" data-slug="{{$project->slug}}">{{$project->title}}</td>
            <td data-id="{{$project->project_id}}" data-slug="{{$project->slug}}">{{$project->description}}</td>
            <td data-id="{{$project->project_id}}" data-slug="{{$project->slug}}">{{$project->created_at->format('d M Y')}}</td>
            <td data-id="{{$project->project_id}}" data-slug="{{$project->slug}}">{{$project->updated_at->format('d M Y')}}</td>
            <td data-id="{{$project->project_id}}" data-slug="{{$project->slug}}">{{$project->slug}}</td>
            {{-- <td class="project-item-actions" data-id="{{$project->project_id}} data-slug="{{$project->slug}}">
                <a style="margin-right: 5px" href="{{action('ProjectController@edit', $project['project_id'])}}"
                  class="btn btn-warning">Edit</a>
                  <a style="margin-right: 5px" href="{{action('ProjectController@show', $project['project_id'])}}"
                  class="btn btn-warning">Show</a>

                <form action="{{action('ProjectController@destroy', $project['project_id'])}}" method="post">



                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td> --}}
        </tr>
        @endforeach
    </tbody>
</table>
<br />
{{ $projects->links() }}

@endsection

@section('scripts')
<script>
    document.querySelectorAll('.project-item').forEach( elem => elem.addEventListener('click', e => {
        console.log(e.target.dataset)
        return window.location.replace("/"+e.target.dataset.slug)
      })
    )
    // document.querySelectorAll('.project-item').forEach(function(elem){

    //     elem.addEventListener('click',function(e){
    //        window.location.replace("/show/"+e.target.dataset.id)
    //     })
    // })

    // document.querySelectorAll('.project-item').forEach( elem => elem.addEventListener('click' ,e => {window.location.replace("/show/"+e.target.dataset.slug))



  </script>
@stop