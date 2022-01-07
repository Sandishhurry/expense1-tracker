<?php
include("connection.php");
// if(isset($_POST['submit']))
// {
	// $userid=$_REQUEST['uid'];
$perposeofincome=$_REQUEST['creditsource'];
  // $availableamount=$_REQUEST['availableamount'];
    $amount=$_REQUEST['amount'];
    $date=$_REQUEST['date'];

	$query="INSERT INTO `income`(`userid`, `perposeofincome`, `incomeamount`, `date`) VALUES ('Devesh','$perposeofincome','$amount','$date')";

	      $data=mysqli_query($conn,$query);
         if ($data) 
          {
	
	        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Credit Sucessfull');
    window.location.href='new.php';
    </script>");
	
          }
       else
          {
        	echo "not sucess";
            }
 //}
?>




