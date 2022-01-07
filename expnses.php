<?php session_start(); ?>


<?php
include("connection.php");
$query="select * from income";
$sql=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($sql);



?>



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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
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
          <a href="expnses.php" class="active">
            <span class="las la-receipt"></span>
            <span> Expences</span>
          </a>
        </li>
        <li>
          <a href="chart.php">
            <span class="las la-clipboard-list"></span>
            <span>  Chart</span>
          </a>
        </li>
        <!-- <li>
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
        <img src="img/2.jpg" width="30px" hight="30px" alt="">
        <div>
          <h4> Name name</h4>
        </div>
      </div>
    </header>
    <main>
      <div class="cards">
        <div class="card-single">
          <div>
            <h1>Income</h1>
            <span><?php echo $data['sumincome']; ?></span>
          </div>
          <div>
            <span class="las la-users"></span>
          </div>
        </div>
        <div class="card-single">
          <div>
            <h1>Expences</h1>
            <span><?php echo $data1['sumincome1']; ?></span>
          </div>
          <div>
            <span class="lab la-google-wallet"></span>
          </div>
        </div>
        <div class="card-single">
          <div>
            <h1>Saveings</h1>
            <span><?php echo $data['sumincome']-$data1['sumincome1']; ?></span>
          </div>
          <div>
            <span class="lab la-google-wallet"></span>
          </div>
        </div>
      </div>

      <div class="wrapper">
         <h2>Your expences</h2>
         <form action="expnses1.php" method="post">
                  <!-- <div class="input-box">
                   <input type="text" name="uid" placeholder="Enter uid" required>
                </div> -->
                <div class="input-box">
                   <input type="text" name="perpose" placeholder="Enter perpose of use" required>
                </div>
                <div class="input-box">
                   <input type="text" name="incomeamountamount"  value="<?php echo $result['incomeamount']; ?>" hidden>
                   <!-- <input type="text" name="mainamount"  value="<?php echo $result['availableamount']; ?>" hidden> -->
                    <input type="number" name="amount" placeholder="Enter The amount" required>
                </div>
                <div class="input-box">
                   <input type="date" name="date" placeholder="Enter Date" required>
                </div>
                <div class="input-box button">
                      <input type="submit" name="submit" value="submited">
                </div>
            </form>
      </div>

          <div class="card-body"> 
              <form action="style2.php" method="post">

                
                <div class="paste-new-forms">

                </div>
              </form>
          </div>
        </script>
    </main>
   
  </div>
</body>
</html>