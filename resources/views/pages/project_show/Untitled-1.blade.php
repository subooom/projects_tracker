<link rel="stylesheet" href="/css/details/detail.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/card/2.4.0/card.css">
<link href="https://bootswatch.com/4/cyborg/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.4.1/cyborg/bootstrap.min.css" integrity="sha256-o+ChunZSxivN1Kvg6Xr6ihSmMp2qCqKw6u+sKB/BaOk=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
  <div class="row" >
    <div class="col-lg-12 margin-tb" style="margin-top: 55px">
        <div class="pull-right">   
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
        </div>
        <div class="pull-left">
          <label for="start">Date:</label>
       <input type="date" id="start" name="trip-start"
       value="2020-05-01"
       min="2020-01-01" max="2020-12-31">
      </div>
    </div>
    </div>

    
<div class="row" >
    <div class="col-lg-12 margin-tb" style="margin-top: 55px">
        <div class="pull-left">
            <h5> PROJECTS DETAILS</h5>
        </div>
        <div class="pull-right">
            <a class="btn btn-outline-info" href="/">Back</a>
        </div>
    </div>
</div>
{{-- <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="form-group ">
      <strong>Title:</strong>
      {{ $project->title }}

    </div>
  </div>
</div>  --}}
 {{-- <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="form-group">
        <strong>Description:</strong>
        {{ $project->description }}
      </div>
    </div>
  </div> --}}
  {{-- <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="form-group">
        <strong>Git_Url:</strong>
        {{ $project->git_url }}
      </div>
    </div>
  </div>  --}}
  {{-- <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="form-group">
        <strong>TimeFrame:</strong>
        {{ $project->timeframe }}
      </div>
    </div>
  </div> --}}


  <div class="row" style="margin-top: 20px">
    <div class="col-md-6">
      <div class="card text-white bg-danger mb-3" style="max-width: 30rem;">
        <div class="card-header">Details</div>
        <div class="card-body">
          <h4 class="card-title">Ongoing Task</h4>
          <p class="card-text"><span class="text-success"><i class="fas fa-tasks"></i> 20%  </span> done in today.</p>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="material-icons">access_time</i> updated 4 minutes ago
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card text-white bg-warning mb-3" style="max-width: 30rem;">
        <div class="card-header">Details</div>
        <div class="card-body">
          <h4 class="card-title">Completed Tasks</h4>
          <p class="card-text">Last Performance
         </div>
        <div class="card-footer">
        <div class="stats">
          <i class="fas fa-update">access_time</i> updated 2 minutes ago
        </div>
      </div>
    </div>
    </div>
  </div>
  
  <div class="row"  style="margin-top: 20px">
  <div class="col-lg-12">
 <h6>Show Table:</h6>
  <table class="table table-striped table-hover" style="margin-top: 20px">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Git_Url</th>
        <th>TimeFrame</th>
      </tr>
    </thead>
  <tbody>
    <tr>
      <td>{{ $project->title }}</td>
      <td>  {{ $project->description }}</td>
      <td>{{ $project->git_url }}</td>
      <td>{{ $project->timeframe }}</td>
    </tr>
  </tbody>
  </table>
  </div>
</div>
</div>




<div class="container" style="margin-top: 20px">
  <div class="grid-container">
   <main class="main">
     <div class="main-header">
       <div class="search">
        <i class="fa fa-search" ></i>
         <input type="text" placeholder="search">
      </div>
      <div class="date">
         <input type="date" placeholder=" date" class="datepicker" min="2020-01-01" max="2020-12-31">
         
        </div>
      </div>
 
     <div class="section">
      <div class="box1">Card</div>
      <div class="box2">Card</div> 
      <div class="box3">Card</div> 
     </div> 
    
}

   </main>
 
 </div>

 </div>
</div>