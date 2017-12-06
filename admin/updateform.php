<?php
session_start();
if (!isset($_SESSION['id'])) 
{
  header('Location:http://localhost/sms/login.php');
} 
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'sms');
$sid=$_GET['sid'];
$q="select * from `student` where `id`='$sid'";
$result=mysqli_query($con,$q);

$data=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
<link rel="stylesheet" href="../css/style.css"> 
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"> 
</head>

<body>
  <a href="admindash.php" class="form button btn-link btn-lg" style="color:green; text-decoration:none; margin:10px;">Back to Admindash</a>
  <div class="login-page">
  <div class="form">
    
    <form action="updatedata.php" method="post" class="login-form" enctype="multipart/form-data">
      <label for="rollno">Enter Rollno:</label>
      <input type="text" value=<?php echo $data['rollno']; ?> id="rollno"name="rollno"/>
      <label for="name">Enter Name:</label>
      <input type="text" value=<?php echo $data['name']; ?> id="name" name="sname"/>
      <label for="city">Enter City:</label>
      <input type="text" value=<?php echo $data['city']; ?> id="city" name="city"/>
      <label for="pcont">Enter Parent's Contact:</label>
      <input type="text" value=<?php echo $data['pcont']; ?> id="pcont" name="pcont"/>
      
      <table>
        <tr>
          <td><label for="std">Enter Standad:</label></td>
      <td>
        <select name="std">
          <?php
          if ( $data['standard']==1) {?>
          <option value="1">1st</option>
          <option value="2">2nd</option>
          <option value="3">3rd</option>
          <option value="4">4th</option>
          <option value="5">5th</option>
          <option value="6">6th</option>
          <option value="7">7th</option>
          <option value="8">8th</option>
          <option value="9">9th</option>
          <option value="10">10th</option>
          <?php } ?>
          <?php
          if ( $data['standard']==2) {?>
          <option value="2">2nd</option>
          <option value="1">1st</option>
          <option value="3">3rd</option>
          <option value="4">4th</option>
          <option value="5">5th</option>
          <option value="6">6th</option>
          <option value="7">7th</option>
          <option value="8">8th</option>
          <option value="9">9th</option>
          <option value="10">10th</option>
          <?php } ?>
          <?php
          if ( $data['standard']==3) {?>
          <option value="3">3rd</option>
          <option value="1">1st</option>
          <option value="2">2nd</option>
          <option value="4">4th</option>
          <option value="5">5th</option>
          <option value="6">6th</option>
          <option value="7">7th</option>
          <option value="8">8th</option>
          <option value="9">9th</option>
          <option value="10">10th</option>
          <?php } ?>
          <?php
          if ( $data['standard']==4) {?>
          <option value="4">4th</option>
          <option value="1">1st</option>
          <option value="2">2nd</option>
          <option value="3">3rd</option>
          <option value="5">5th</option>
          <option value="6">6th</option>
          <option value="7">7th</option>
          <option value="8">8th</option>
          <option value="9">9th</option>
          <option value="10">10th</option>
          <?php } ?>
          <?php
          if ( $data['standard']==5) {?>
          <option value="5">5th</option>
          <option value="1">1st</option>
          <option value="2">2nd</option>
          <option value="3">3rd</option>
          <option value="4">4th</option>
          <option value="6">6th</option>
          <option value="7">7th</option>
          <option value="8">8th</option>
          <option value="9">9th</option>
          <option value="10">10th</option>
          
          <?php } ?>
          <?php
          if ( $data['standard']==6) {?>
          <option value="6">6th</option>
          <option value="1">1st</option>
          <option value="2">2nd</option>
          <option value="3">3rd</option>
          <option value="4">4th</option>
          <option value="5">5th</option>
          <option value="7">7th</option>
          <option value="8">8th</option>
          <option value="9">9th</option>
          <option value="10">10th</option>
          
          <?php } ?>
          <?php
          if ( $data['standard']==7) {?>
          <option value="7">7th</option>
          <option value="1">1st</option>
          <option value="2">2nd</option>
          <option value="3">3rd</option>
          <option value="4">4th</option>
          <option value="5">5th</option>
          <option value="6">6th</option>
          <option value="8">8th</option>
          <option value="9">9th</option>
          <option value="10">10th</option>
          
          <?php } ?>
          <?php
          if ( $data['standard']==8) {?>
          <option value="8">8th</option>
          <option value="1">1th</option>
          <option value="2">2nd</option>
          <option value="3">3rd</option>
          <option value="4">4th</option>
          <option value="5">5th</option>
          <option value="6">6th</option>
          <option value="7">7th</option>
          <option value="9">9th</option>
          <option value="10">10th</option>
          <?php } ?>
          <?php
          if ( $data['standard']==9) {?>
          <option value="9">9th</option>
          <option value="1">1th</option>
          <option value="2">2nd</option>
          <option value="3">3rd</option>
          <option value="4">4th</option>
          <option value="5">5th</option>
          <option value="6">6th</option>
          <option value="7">7th</option>
          <option value="8">8th</option>
          <option value="10">10th</option>
          <?php } ?>
          <?php
          if ( $data['standard']==10) {?>
          <option value="10">10</option>

          <option value="1">1th</option>
          <option value="2">2nd</option>
          <option value="3">3rd</option>
          <option value="4">4th</option>
          <option value="5">5th</option>
          <option value="6">6th</option>
          <option value="7">7th</option>
          <option value="8">8th</option>
          <option value="9">9th</option>
          <?php } ?>
          
          
        </select>
      </td>
        </tr>
      </table>
      <label for="image">Enter Image:</label>
      <input type="file" id="image" name="image"/>
      <input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
      <button>Update</button>
      
    </form>
  </div>
</div>
</body>
</html>

