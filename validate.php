<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'sms');
$q="select * from admin where username='$username' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if ($num!==1) {
header('Location:http://localhost/sms/login.php');
}
else{
	$data=mysqli_fetch_assoc($result);
$_SESSION['id']=$data;
header('Location:http://localhost/sms/admin/admindash.php');
}
mysqli_close($con);
?>