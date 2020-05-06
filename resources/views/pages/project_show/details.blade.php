 @extends('layouts.project')
 @section('css') 
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb" style="margin-top: 50px">
        <div class="pull-left">
            <h4>Show Project</h4>
        </div>
        <p>
          What is needed here is, h1 ma remaining days counter counter hunu paryo, (hint: timeframe calnedar, aaja ko vanda agadi ko date not selectable, created_at)
          
          google term 'substract date from date php stackoverflow'

          project Git url 

          migration: add_git_url_to_projects_table, add_timeframe_to_projects_table, research on what more can be added to projects table and make the required migrations one by one.

          Create project page ma update garne naya input feilds haru, ani create garda sab kura add hunu paryo

          localhost:8000 ma last updated on udaidey ani time grame ra git url hal git url ma click garda khulne type ko bana

        </p>
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
@section('scripts')
<script>
// alert('show')
</script>