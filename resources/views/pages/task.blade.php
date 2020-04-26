@extends('layouts.app')
@section('content')
    <div class="container">
      <h4>Tasks Details:</h4><br/>
      <form method="post" action="{{url('tasks')}}" enctype="multipart/form-data">
        @csrf
       
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Title:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>     
            <div class="form-group col-md-4">
              <label for="Desc">Description:</label>
              <input type="text" class="form-control" name="desc">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="timespent">TimeSpent:</label>
                <input type="time" class="form-control" id="appt" name="appt"
                min="09:00" max="18:00" required>
              </div>
            </div>
    
        </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Add Task</button>
          </div>
        </div>
      </form>
    </div>
    
    @endsection
