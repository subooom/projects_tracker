@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
          <div class="col-lg-12 margin-tb"  style=" margin-top: 50px">
              <div class="pull-left">
                  <h4>Add New Project</h4>
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

     <form action={{url('store')}} method="POST">
      @csrf
      <div class="row">
          <div class="col-xs-12 col-md-12 col-sm-12">
          <div class="form-group ">
            <strong>Title:</strong>
            <input type="text" class="form-control" name="title" placeholder="Title">
          </div>
        </div>
      </div>
        <div class="row">  
          <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
              <strong>Description:</strong>
              <textarea class="form-control" name="description" style="height:150px" placeholder="Description"></textarea>
            </div>
          </div>
        </div>
        </div>
        <div class="row">    
          <div class="col-xs-12 col-md-12 col-sm-12" text="center" style="left:125px">  
              <div class="form-group">
            <button type="submit" class="btn btn-success">SUBMIT</button>
           </div>
      </div>
  </div>
</form>
    
    @endsection