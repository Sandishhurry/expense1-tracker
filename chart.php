<?php session_start(); ?>


<?php
include("connection.php");
$query="SELECT SUM(incomeamount) as 'sumincome' FROM income;";
$res=mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);

 // echo 'sum of salary:'.$;
$query1="SELECT SUM(amount) as 'sumincome1' FROM expenses;";
$res1=mysqli_query($conn,$query1);
$data1=mysqli_fetch_array($res1);

?>
 

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>Expences trakar</title>
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="income.css">
  <link rel="stylesheet" href="chart.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['userid', 'incomeamount'],
          
          <?php 
           
           $sql = "select * from expenses";
           $fire=mysqli_query($conn,$sql);

          while($result = mysqli_fetch_assoc($fire))
          {
                  echo"['".$result['date']."',".$result['amount']."],";
          }
           ?>

         
        ]);

        var options = {
          title: 'Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

</head>

<body>
 <input type="checkbox" id="nav-toggle">
 <div class="asidebar">
   <div class="sidebar-brand">
     <h2><i class="fa fa-car fa"></i><span>Dashbord</span></h2>
   </div>
    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="paymenthistory.php">
            <span class="las la-igloo"></span>
            <span>Details</span>
          </a>
        </li>
        <li>
          <a href="account.php">
            <span class="las la-users"></span>
             
            <span> Income</span>
          </a>
        </li>
        <li>
          <a href="expnses.php">
            <span class="las la-receipt"></span>
            <span> Expences</span>
          </a>
        </li>
        <li>
          <a href="chart.php" class="active">
            <span class="las la-clipboard-list"></span>
            <span> Chart</span>
          </a>
        </li>
       <!--  <li>
          <a href="">
            <span class="fa fa-refresh "></span>
            <span> Change Password</span>
          </a>
        </li> -->
        <li>
          <a href="login.php">
            <span class="fa fa-cog"></span>
            <span> Exit</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-content">
    <header>
      <h2 style="">
      <label for="nav-toggle">
          <span class="las la-bars"></span>
        </label>
        Home
      </h2>
      <div class="search-wrapper">
        <span class="las la-search"></span>
        <input type="search" placeholder="Search here" />
      </div>
      <div class="user-wrapper">
        <div>
          <h4> Name name</h4>
        </div>
      </div>
    </header>

         <div id="piechart" style="width: 900px; height: 500px; background-color =  linear-gradient(45deg,#251991, #bb26c9);" class= "chart" ></div>
  
   
  </div>
</body>
</html>