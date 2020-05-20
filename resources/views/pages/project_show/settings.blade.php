@extends('layouts.project')
@section('css')
<link rel="stylesheet" href="/css/settings/settings.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datedropper/2.0/datedropper.css">    
@endsection

@section('content')
<div class="container" >
    <div class="wapper">
        <h2>Account Settings</h2>
    <div class="form-style-5">
        <form>
        <fieldset>
        <legend><span class="number">1</span> Candidate Info</legend>
        <input type="text" name="name" placeholder=" Name *">
        <input type="email" name="email" placeholder=" Email *">
        <input type="text" name="birthday" class="picker" data-large-mode="true" data-dd-theme="leaf" placeholder=" Birthday *" >
         <input type="currentpassword" name="Cupswd" placeholder="CurrendPassword *" minlength="8">
         <input type="newpassword" name="Npswd" placeholder=" NewPassword *"> 
        <input type="confirmpassword" name="pswd" placeholder=" ConfirmPassword *">
        <label for="gender">Gender:</label>
        <select id="gender" name="field4">
        <optgroup label="Gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="others">Others</option>
        </optgroup>
    </select>
        <label for="job">Job:</label>
        <select id="job" name="job">
        <optgroup label="Job">
          <option value="ui designer">UI Designer</option>
          <option value="backend developer">Backend Developer</option>
          <option value="fullstack developer">FullStack Developer</option>
          <option value="writer">Writer</option>
          <option value="officer">Officer</option>
          <option value="manager">Manager</option>
          <option value="others">Others</option>
        </optgroup>
        </select>    
        <label for="language">Language:</label>
        <select id="language" name="language">
        <optgroup label="Language">
          <option value="english">English</option>
          <option value="Nepali">Nepali</option>
          <option value="spanish">Spanish</option>
          <option value="Chinese">Chinese</option>
          <option value="japanese">japanese</option>
          <option value="others">Others</option>
        </optgroup>
        </select>     
        <label for="country">Country:</label>
        <select id="country" name="country">
        <optgroup label="Country">
          <option value="usa">USA</option>
          <option value="uk">UK</option>
          <option value="nepal">Nepal</option>
          <option value="france">France</option>
          <option value="japan">Japan</option>
          <option value="others">Others</option>
        </optgroup>
        </select>   
        <label for="city">City:</label>
        <select id="city" name="city">
        <optgroup label="City">
          <option value="kathmandu">Kathmandu</option>
          <option value="boston">Boston</option>
          <option value="nepal">Nepal</option>
          <option value="france">France</option>
          <option value="japan">Japan</option>
          <option value="others">Others</option>
        </optgroup>
        </select>
        </fieldset>
        <fieldset >
        <legend ><span class="number">2</span> Additional Info</legend>
        
        </fieldset>
        <input type="submit" value="save" />
        </form>
        </div>

  </div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="datedropper/2.0/datedropper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datedropper/2.0/datedropper.min.js"></script>
  <script>
    $('.picker').dateDropper(
      
    );
</script>


@endsection