<?php
$rollno=$_POST['rollno'];
$name=$_POST['sname'];
$city=$_POST['city'];
$pcont=$_POST['pcont'];
$std=$_POST['std'];
$id=$_POST['sid'];
$image=$_FILES['image'];
$images=$image['name'];
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'sms');
if (file_exists("img/".$image['name'])) {
  echo $image['name']."already exists";
}
else if ($image['type']=="image/jpeg") {
  move_uploaded_file($image['tmp_name'], "img/".$image['name']);
}
else{

  echo "invalid format";
}
$q="update `student` set `id` = '$id', `rollno` = '$rollno', `name` = '$name', `city` = '$city', `pcont` = '$pcont', `standard` = '$std', `image` = '$images' where `id` = $id;";
$status=mysqli_query($con,$q);
if($status==1) {
	 
  header('Location:http://localhost/sms/admin/admindash.php');
    
}
    else
      echo"try again";
mysqli_close($con);
?>
