
<?php
$rollno=$_POST['rollno'];
$standard=$_POST['std'];
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'sms');
if(!$db)
  die("cant selected");
$q="select * from student where `rollno`='$rollno' && `standard`='$standard'";
$result=mysqli_query($con,$q);
if (!isset($result)) {
   header('Location:http://localhost/sms/index.php');
}
else

$num=mysqli_num_rows($result);
mysqli_close($con);
?>

<html >
<head>
  <meta charset="UTF-8">
<link rel="stylesheet" href="../css/style.css"> 
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"> 
</head>

<body>
  <a href="../index.php" class="form button btn-link btn-lg" style="color:green; text-decoration:none; margin:10px;">I'm gonna back to the start!</a>
  <div class="login-page">
  <div class="form">
    
     <?php
     if($num>0)
      {
        $row=mysqli_fetch_assoc($result);
      ?><table height="50%" width="100%">
      <tr><th>Student Details</th></tr>
      <tr>
        <td rowspan="5" ><img src="img/<?php echo $row['image'];?>" class="img-thumbnail"/></td>
        <th>Roll No  :</th>
        <td><?php echo $row['rollno'];?></td>
      </tr>
      <tr>
        <th>Name  :</th>
        <td><?php echo $row['name'];?></td>
      </tr>
        <tr>
        <th>City  :</th>
        <td><?php echo $row['city'];?></td>
      </tr><tr>
        <th>Parents Contact  :</th>
        <td><?php echo $row['pcont'];?></td>
      </tr><tr>
        <th>Standard  :</th>
        <td><?php echo $row['standard'];?></td>
      </tr>
      <?php
      }

      ?>
    </table>
  </div>
</div>
</body>
</html>
