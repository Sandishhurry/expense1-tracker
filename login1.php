<?php
 include("connection.php");
$uid=$_REQUEST['f1'];
$pass=$_REQUEST['f2'];

//echo $uid,$pass;


$sql="SELECT * FROM reg WHERE userid='$uid' AND password='$pass'";
$data=mysqli_query($conn,$sql);
$res=mysqli_num_rows($data);
if ($res)
 {
	# code...
	// echo "login successfull";
	header('location:paymenthistory.php');
}
else
{
	echo "invalid";
}
?>