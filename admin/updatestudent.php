<?php
session_start();
if (!isset($_SESSION['id'])) 
{
  header('Location:http://localhost/sms/login.php');
}?>
<html>
<head>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="../css/style.css"> 
</head>
<body>
	<a href="admindash.php" class="form button btn-link btn-lg" style="color:green; text-decoration:none; margin:10px;">Back to Admindash</a>
<div class="login-page">

  <div class="form">
  	
    <h3 align="center">Enter Name and Standard</h3>
    <form action="updatestudent.php" method="POST" class="login-form" >
      <label for="name">Enter Name:</label>
      <input type="text" placeholder="Name of Student" id="name" name="names" required/>
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
      
      <button name="submit">Search</button>
      
    </form>
  </div>
</div>
<table align="center" width="80%" border="1" >
  <tr style="background-color:#000; color:#fff;" align="center">
    <th>No</th>
    <th>Image</th>
    <th>Name</th>
    <th>Roll no</th>
    <th>Edit</th>
  </tr>
  <?php
if (isset($_POST['submit'])) {
  $names=$_POST['names'];
$standard=$_POST['std'];
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'sms');
$q="select * from student where `standard`='$standard' && `name` LIKE '%$names%'";
$result=mysqli_query($con,$q);
if (mysqli_num_rows($result)<1) {
  echo "<tr><td colspan='5'>No result Found</td></tr>";
}
else{
  $count=0;
while ($data=mysqli_fetch_assoc($result)) {
  $count++;
  ?>
<tr >
    <td><?php echo $count; ?></td>
    <td><img src="img/<?php echo $data['image'];?>" style="max-width:150px; max-height:150px;"/></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['rollno']; ?></td>
    <td><a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
  </tr>




  <?php
}
}
}
?>
</table>
</body>
</html>
