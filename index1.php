


<?php
include("connection.php");
if(isset($_POST['submit']))
 {
$userid=$_REQUEST['uid'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
//echo $userid,$email,$pass;

$query1="INSERT INTO `reg`(`userid`, `email`, `password`) VALUES ('$userid','$email','$pass')";

 
$data1=mysqli_query($conn,$query1);
if ($data1) 
{
  
   //echo "debit sucess";
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Reg Sucessfull');
    window.location.href='login.php';
    </script>");
  
}
else
{
  echo "not sucess";
}
}
?>
