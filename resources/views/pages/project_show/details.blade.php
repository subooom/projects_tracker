 @extends('layouts.project')

 @section('css')
 <link rel="stylesheet" href="/css/details/details.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css.css">
 <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
 @endsection

 @section('content')
 <div class="container" style="">
     <div class="row" style="margin-top: 40px">
         <div class="col">
             <div class="search">
                 <i class="fa fa-search"></i>
                 <input type="text" placeholder="Type To Search">
             </div>
         </div>
         <div class="col">
             <div class="date">
                 <input type="date" class="datepicker" min="2020-01-01" max="2020-12-31">
             </div>
         </div>
         <div class="col1" style="float:right">
             <p>&nbsp;&nbsp;&nbsp;&nbsp;<img src="/img/avatar.png" class="user"></p>
             <br>
             <button class="add">+ Add Funds</button>
             <p class="budget" style="margin-top: 18px">Budgets <span></span> December <i class="fas fa-angle-down"></i>
             </p>
             <div class="box1" style="margin-top:30px">
                 <p style="color:#62e7a7"><i class="fas fa-map"></i> Travel<span></span> $140</p>
             </div>
             <div class="box2" style="margin-top:24px">
                 <p style="color:#d27fe7"><i class="fas fa-bus"></i> Transport <span></span>$240</p>
             </div>
             <div class="box3" style="margin-top:24px">
                 <p style="color: darkblue"><i class="fas fa-shopping-basket"></i> Grocery<span></span>$140</p>
             </div>
             <div class="newbudget" style="margin-top:24px">
                 <p style="color: darkblue">+ Add new card</p>
             </div>
         </div>
     </div>
     <br />
     <br />
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
     <div class="row" style="margin-top: 15px;display: flex;justify-content: space-around;margin-bottom: 50px;overflow-y: hidden;">
         <div class="col" style="padding: 0">
             <h1 style="float:left">Expenses activity</h1>
             <h1 style="float: right">This Week <i class="fas fa-angle-down"></i></h1>
             <div id="chart-p5" />
         </div>
         <h3>Expenses Breakdown</h3>
         <div class="col">
             <div class="expensesitems">
                 <p class="items" style="margin-top:20px"><i class="fas fa-store"></i> &nbsp; Prime super shop <span
                         style="color:aquamarine"> $140 </span></p>
                 <p> Grocery</p>

                 <p class="items" style="margin-top:30px"> <i class="fas fa-store"></i> &nbsp; Prime super shop<span
                         style="color:lightpink"> $140 </span></p>
                 <p>Mobile</p>

                 <p class="items" style="margin-top:30px"><i class="fas fa-store"></i> &nbsp; Prime super shop<span
                         style="color:lightpink"> $140 </span></p>
                 <p>Grocery</p>

                 <p class="items" style="margin-top:30px"><i class="fas fa-store-slash"></i> &nbsp; Prime super
                     shop<span style="color:lightpink"> $140 </span></p>
                 <p>Grocery</p>

                 <p class="items" style="margin-top:30px"><i class="fas fa-store-slash"></i> &nbsp; Prime super
                     shop<span style="color:aquamarine"> $140 </span></p>
                 <p>Grocery</p>
             </div>
         </div>
     </div>
     <br />
     <br />
 </div>
 @endsection

 @section('scripts')
 <script></script>
 {{-- p5js.js  --}}

 <script src="/dependencies/p5/p5.min.js"></script>
 <script src="/js/project_show/details-chart.js"></script>
 {{-- #chart-p5 --}}
 @endsection
