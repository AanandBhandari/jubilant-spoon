<?php
$rollno=$_POST['rollno'];
$standard=$_POST['std'];
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'sms');
$q="select * from student where `standard`='$standard' && `rollno`='$rollno'";
$result=mysqli_query($con,$q);
if (mysqli_num_rows($result)<1) {
  echo "no result found!!!";
}
else
{
  $data=mysqli_fetch_assoc($result);
  $id=$data['id'];
  $a="delete from student where id=".$id;
  mysqli_query($con,$a);
  header('Location:http://localhost/sms/admin/admindash.php');
}
mysqli_close($con);
?>