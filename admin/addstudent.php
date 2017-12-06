<?php
session_start();
if (!isset($_SESSION['id'])) 
{
  header('Location:http://localhost/sms/login.php');
}?>
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
    
    <form action="addstudents.php" method="POST" class="login-form" enctype="multipart/form-data">
      <label for="rollno">Enter Rollno:</label>
      <input type="text" placeholder="Rollno" id="rollno"name="rollno" required/>
      <label for="name">Enter Name:</label>
      <input type="text" placeholder="Student name" id="name" name="sname" required/>
      <label for="city">Enter City:</label>
      <input type="text" placeholder="City" id="city" name="city" required/>
      <label for="pcont">Enter Parent's Contact:</label>
      <input type="text" placeholder="Contact no" id="city" name="pcont"/ required>
      
      <table>
        <tr>
          <td><label for="std">Enter Standad:</label></td>
      <td>
        <select name="std" required>
         
         
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
         
        </select>
      </td>
        </tr>
      </table>
      <label for="image">Enter Image:</label>
      <input type="file" id="image" name="image"/ required>
      <button>Insert</button>
      
    </form>
  </div>
</div>
</body>
</html>
