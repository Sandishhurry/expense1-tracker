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
  <title>Dashboad admin</title>
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="menu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style1.css">
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
                            <a href="paymenthistory.php" class="active">
                                <span class="las la-igloo"></span>
                                   <span>Details</span>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="account.php">
                                    <span class="las la-users"></span>
                                    <span>Income</span>
                                    </a>
                                    </li>
        <li>
          <a href="expnses.php">
            <span class="las la-receipt"></span>
            <span>Expences</span>
          </a>
        </li>
        <li>
          <a href="chart.php">
            <span class="las la-clipboard-list"></span>
            <span> Chart</span>
          </a>
        </li>
       <!--  <li>
          <a href="">
            <span class="fa fa-refresh "></span>
            <span> option4</span>
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
      <h2 style="color: #FF0000;">
      <label for="nav-toggle">
          <span class="las la-bars"></span>
        </label>
        Dashbord
      </h2>
      <div class="search-wrapper">
        <span class="las la-search"></span>
        <input type="search" placeholder="Search here" />
      </div>
      <div class="user-wrapper">
        <img src="img/2.jpg" width="30px" hight="30px" alt="">
        <div>
          <h4> Name name</h4>
          <small>Post</small>
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
      <div class="recent-grid">
          <div class="projects">
             <div class="card">
                 <div class="card-head">
                    <h3>History</h3>
                    <button>See all <span class="las la-arrow-right"></span></button>
                 </div>
                 <div class="card-body">
                     <div class="table-responsive">
                      <table width="100%">
                       <thead>
                           <tr>
                               <td>Perpose of Transaction</td>
                               <td>Amount</td>
                               <td>Date</td>
                           </tr>
                       </thead>
                       <tbody>
                            <?php
    
        
         include("connection.php");
              
        
        
        
        $sql = "select * from expenses";
            $result = mysqli_query($conn,$sql);
        if($result){
            if ($result->num_rows > 0) {
                while($rows=$result->fetch_assoc()) {
     ?>
    <tr class="active-row">
          
        <td><?php echo $rows['perpose'];?></td>
        <td><?php echo $rows['amount'];?></td>
        <td><?php echo $rows['date'];?></td>
        
    </tr>
    <?php
                }
            } 
        }
        else{
          echo "database error";
        }
        $conn->close();
     ?>
     </tbody>
                       
                     </table>
                     </div>
                 </div>
             </div>
          </div>
          <div class="customers"></div>
      </div>

    </main>
  </div>
</body>
</html>
