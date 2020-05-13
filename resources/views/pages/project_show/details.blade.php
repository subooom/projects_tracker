 @extends('layouts.project')
 @section('css') 
 @section('content') 
 <link rel="stylesheet" href="/css/details/details.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css.css">
 <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
     <div class="container" style="margin-top:20px">
      <div class="row" style="margin-top: 40px">
       <div class="col">
        <div class="search">
        <i class="fa fa-search" ></i>
           <input type="text" placeholder="Type To Search">
     </div>
    </div>
    <div class="col">
      <div class="date">
      <input type="date" placeholder=" date" class="datepicker" min="2020-01-01" max="2020-12-31">
    </div>
    </div>
 </div>
<br/>
<br/>
 <div class="row" style="margin-top: 20px">
  <div class="section">
  <div class="column2">
    <div class="card">
      <h2>Wallet Balance</h2>
      <p>32,549.00<sup> $ </sup></p>
     
    </div>
  </div>

  <div class="cardsection">
    <div class="card1">
    </div>
  </div>
  
  <div class="column4">
    <div class="card2">
      <p>+ Add new card</p>
    </div>
  </div>
 </div>
 </div>
 <div class="row" style="margin-top: 15px">
 <div class="expenses">
<h1 style="float:left">Expenses activity</h1>
<h1 style="float: right">This Week  <i class="fas fa-angle-down"></i></h1>
<p><img src="/img/chart.jpg"></p>
 </div>
 <div class="expensesitems">
  <h3>Expenses Breakdown</h3>
  <p class="items" style="margin-top:20px"><i class="fas fa-store"></i> &nbsp; Prime super shop <span style="color:aquamarine">  $140 </span></p>
  <p> Grocery</p>
  
  <p class="items" style="margin-top:30px"> <i class="fas fa-store"></i> &nbsp; Prime super shop<span style="color:lightpink">  $140 </span></p>
  <p>Mobile</p>

  <p class="items" style="margin-top:30px"><i class="fas fa-store"></i> &nbsp; Prime super shop<span style="color:lightpink"> $140 </span></p>
  <p>Grocery</p>

  <p class="items" style="margin-top:30px"><i class="fas fa-store-slash"></i> &nbsp; Prime super shop<span style="color:lightpink"> $140 </span></p>
  <p>Grocery</p>

  <p class="items" style="margin-top:30px"><i class="fas fa-store-slash"></i> &nbsp; Prime super shop<span style="color:aquamarine"> $140 </span></p>
  <p>Grocery</p>
 </div>
 </div>

</div>

@endsection
@section('scripts')
<script>
// alert('show')
</script>