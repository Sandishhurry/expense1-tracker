


<?php
include("connection.php");
if(isset($_POST['submit']))
 {
// $userid=$_REQUEST['uid'];
$perpose=$_REQUEST['perpose'];
$amount=$_REQUEST['amount'];
$date=$_REQUEST['date'];

 // $incomeamount=$_REQUEST['incomeamountamount'];
//$mainamount=$_REQUEST['mainamount'];

//$total=$incomeamount-$amount;
// $availableamount=

//echo $userid,$perpose,$amount,$date,$mainamount,$total;


// $query="UPDATE `income` SET `incomeamount`='$total' WHERE `userid`='Devesh'";

$query1="INSERT INTO `expenses`(`userid`, `perpose`, `amount`, `date`) VALUES ('Devesh','$perpose','$amount','$date')";



// $data=mysqli_query($conn,$query);
// if ($data) 
// {
  
//    echo "debit sucess";
  
// }
// else
// {
//   echo "not sucess";
// }


$data1=mysqli_query($conn,$query1);
if ($data1) 
{
  
   //echo "debit sucess";
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Debit Sucessfull');
    window.location.href='new.php';
    </script>");
  
}
else
{
  echo "not sucess";
}
}
?>
