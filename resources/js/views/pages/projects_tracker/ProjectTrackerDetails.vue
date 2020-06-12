<template>
  <div class="main-content">

<div class="container">
    <div class="row" style="margin-top: 40px">
        <div class="col" style="position: relative">
            <div class="search">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Type To Search">
            </div>
        </div>
        <div class="col">
            <div class="date">
                <input class="picker" type="text">
            </div>
        </div>
        <div class="col1" style="display: flex;flex-direction:column; justify-content: center;align-items: center;">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<img src="/img/avatar.png" class="user"></p>
            <br>
            <button id="modalBtn" class="add">+ Add Funds</button>
            <div class="budget" style="margin-top: 25px;font-size:15px">
               <h1 class="heading"> Budgets</h1>
                <p class="pgraph">December <i class="fas fa-angle-down"></i></p>
            </div>
            <div class="box1" style="margin-top:25px">
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

    <div class="row"
        style="margin-top: 15px;display: flex;justify-content: space-around;margin-bottom: 50px;overflow-y: hidden;">
        <div class="col-6" style="padding: 0">
            <h1 style="float:left">Expenses activity</h1>
            <h1 style="float: right">This Week <i class="fas fa-angle-down"></i></h1>
            <div id="expense-review-chart-container">
                <canvas id="myChart" width="400" height="400"></canvas>
                <div class="content">
                </div>
            </div>
        </div>
        <div class="col-6" style="padding: 0;marigin-left:80px">
            <h3>Expenses Breakdown</h3>
            <div class="expensesitems">
                <div class="items" style="margin-top:20px">
                <i class="fas fa-store" style="color:rgb(240, 130, 146)"></i> &nbsp; Prime super shop
                    <span style="color:rgb(240, 130, 146)"> $140 </span></p>
                    <p> Grocery</p>
                </div>

                <div class="items" style="margin-top:25px">
                     <i class="fas fa-store" style="color:rgb(82, 197, 159)"></i> &nbsp; Prime super shop
                     <span style="color:rgb(82, 197, 159);font-size:15px"> $140 </span></p>
                       <p>Mobile</p>
                </div>

                <div class="items" style="margin-top:25px">
                    <i class="fas fa-store" style=" color:rgb(240, 130, 146)"></i>
                     &nbsp; Prime super shop
                     <span style="color:rgb(240, 130, 146);font-size:15px"> $140 </span></p>
                     <p>Grocery</p>
                </div>

                <div class="items" style="margin-top:25px">
                    <i class="fas fa-store" style="color:rgb(82, 197, 159)"></i>
                    &nbsp; Prime super shop
                    <span style="color:rgb(82, 197, 159);font-size:15px"> $140 </span></p>
                      <p>Grocery</p>
                </div>

                <div class="items" style="margin-top:25px">
                    <i class="fas fa-store" style="color:rgb(240, 130, 146)"></i>
                    &nbsp; Prime super shop
                    <span style="color:rgb(240, 130, 146);font-size:15px"> $140 </span></p>
                     <p>Grocery</p>
                </div>
            </div>
        </div>
    </div>

    <br />
    <br />

    </div>
</div>
</template>

<style scoped>
.container {
    height: 98vh;
    width: 100%;
    overflow-y: scroll;
    /* background-color: white; */
    background-image: linear-gradient(to right, white, white 78%, #f6fffe 22%);
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
    box-shadow: -1px -1px 6px 0px rgba(92, 99, 103, 0.55);
    float: right;
}

.col {
    float: left;
    /* padding-left: 15px;
    padding-right: 130px */
    padding-right: 107px;
}

.col1 {
    float: right;
}

.search {
    margin-left: 42px;
    margin-bottom: 10px;
    font-family: "Montserrat", sans-serif;
}

.search i {
    position: absolute;
    color: black;
    margin-top: 20px;
    margin-left: 15px;
}

input {
    height: 50px;
    width: 350px;
    border: none;
    border-radius: 25px;
    border-color: rgb(249, 249, 249);
    background-color: rgb(249, 249, 249);
    text-align: center;
    font-family: "Montserrat", sans-serif;
    cursor: pointer;
}

.picker {
    height: 50px;
    width: 250px;
    border: none;
    border-radius: 25px;
    border-color: rgb(249, 249, 249);
    background-color: rgb(249, 249, 249);
    /* color: white; */
    text-align: center;
}

/* #picker {
    background-color: #fff;
    cursor: pointer;
    padding: 5px 10px;
    border: 1px solid #ccc;
    width: 100%;
} */

.section {
    /* display: flex;
    flex-direction: column;
    align-items: center;
    height: 250px;
    width: 950px;
    margin-top: 30px;
    margin-left: 48px;
    border-radius: 30px;
    background-color: #f7fffd;
    margin-bottom: 20px;
    padding: 24px;
    box-sizing: border-box; */
    background-color: hsla(170, 84%, 96%, .7);
    height: 250px;
    width: 770px;
    margin-top: 30px;
    margin-left: 48px;
    border-radius: 30px;
}

.column2 {
    margin-top: 30px;
    float: left;
    width: 28%;
    padding: 0 10px;
    margin-left: 20px;
}

.cardsection {
    margin-top: 50px;
    float: left;
    width: 30%;
    padding: 0 10px;
}

.column4 {
    margin-top: 50px;
    float: left;
    width: 29%;
    padding: 0 10px;
}

.card {
    height: 150px;
    text-align: center;
    color: #a9a9a9;
}

.card1 {
    height: 150px;
    border-radius: 15px;
    text-align: center;
    background-color: #1c083e;
    text-align: center;
}

.card2 {
    height: 150px;
    border: dashed;
    border-radius: 15px;
    text-align: center;
    color: lightgrey;
    align-items: center;
    justify-content: center;
}

.card2 p {
    color: rgb(4, 4, 53);
    line-height: 10;
    font-family: "Montserrat", sans-serif;
}

h2 {
    text-align: left;
    font-family: "Montserrat", sans-serif;
    font-size: 20px;
}

sup {
    font-size: 15px;
}

.card p {
    text-align: left;
    font-size: 30px;
    color: midnightblue;
    font-weight: 800;
    font-family: "Montserrat", sans-serif;
}

h1 {
    text-align: left;
    font-family: "Montserrat", sans-serif;
    font-size: 15px;
    color: rgb(4, 4, 53);
}

Strong {
    font-size: 18px;
    font-family: "Montserrat", sans-serif;
    color: rgb(4, 4, 53);
}

h1 {
    font-size: 17px;
    padding-right: 125px;
    font-family: "Montserrat", sans-serif;
}

.chart-image {
    width: 400px;
    height: 310px;
    background-color: white;
}

.expensesitems {
    overflow-y: auto;
    display: flex;
    flex-direction: column;
}

h3 {
    font-size: 17px;
    font-family: "Montserrat", sans-serif;
    color: rgb(4, 4, 53);
}

p {
    font-size: 12px;
    font-family: "Montserrat", sans-serif;
}

.items {
    font-size: 15px;
    font-family: "Montserrat", sans-serif;
    /* background-color: rosybrown; */
}

/* .icon {
    background-color: rosybrown;
    height: 20px;
    width: 100px;
    border-radius: 5px;
} */

span {
    font-size: 12px;
    margin-left: 60px;
}

/* .items i {
;
} */

.user {
    width: 210px;
}

.add {
    display: flex;
    justify-content: center;
    margin-left: 18px;
    height: 58px;
    width: 208px;
    background-color: #12c7a2;
    border-radius: 12px;
    border: none;
    font-family: "Montserrat", sans-serif;
    color: white;
}

.add:hover {
    color: black;
    background-color: rgb(118, 243, 156);
    cursor: pointer;
    transform: scale(1.01);
    transition: all 3s ease-out;
}

.budget {
    display: flex;
    justify-content: center;
    font-family: "Montserrat", sans-serif;
    color: rgb(4, 4, 53);
    font-size: 15px;
    margin-left: 20px;
}

.newbudget {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 20px;
    height: 58px;
    width: 205px;
    border: dashed;
    color: gainsboro;
    border-radius: 15px;
    text-align: center;
    line-height: 4;
}



.newbudget:hover {
    border-color: black;
    cursor: pointer;
}

.box1 {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 20px;
    height: 58px;
    width: 205px;
    border: none;
    background-image: linear-gradient(to right,
            #bdf2d8,
            #bdf2d8 70%,
            #dcf7ea 30%);
    border-radius: 15px;
    line-height: 4;

}

.box2 {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 20px;
    height: 58px;
    width: 205px;
    border: none;
    background-image: linear-gradient(to right,
            #efd8f5,
            #efd8f5 70%,
            #f4e9f7 30%);
    border-radius: 15px;
    line-height: 4;
}

.box3 {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 20px;
    height: 58px;
    width: 205px;
    border: none;
    background-color: #dde7e7;
    background-image: linear-gradient(to right,
            #dde7e7,
            #dde7e7 70%,
            #f0f5f5 30%);
    border-radius: 15px;
    line-height: 4;
}

.modal {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    z-index: 999;
    background-color: rgba(0, 0, 0, .5);
    display: none;
    justify-content: center;
    align-items: center;
}

.last {
    margin-top: 20px;
    display: flex;
    justify-content: center;

}

.new {
    display: flex;
    justify-content: center;

}

.name {
    width: 72%;
    padding: 12px 20px;
    margin: 8px 0;
    border: 1px solid #ccc;
    box-sizing: border-box;
    margin-left: 100px;
}

.submit {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    margin-left: 150px;
}

.submit:hover {
    background-color: #45a049;
}

.closeBtn {
    color: rgb(24, 22, 22);
    float: right;
    font-size: 30px;
}

.closeBtn:hover,
.closeBtn:focus {
    color: rgb(167, 162, 162);
    text-decoration: none;
    cursor: pointer;
}

</style>
<script>

  import LocalStorage from './../../../models/storage';

  export default{

    name: 'ProjectTrackerDetails',
    beforeMount(){
      LocalStorage.set('app_mode', 'projects_tracker')
    }
  }
</script>