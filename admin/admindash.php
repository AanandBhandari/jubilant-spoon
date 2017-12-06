<?php
session_start();
if (!isset($_SESSION['id'])) 
{
  header('Location:http://localhost/sms/login.php');

}
$username=$_GET['tname'];
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'sms');
if(!$db)
  die("cant selected");
$q="select * from admin where `username`='$username'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/landing-page.css" rel="stylesheet">
     </head>
  <body><!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">hello Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="logout.php">logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="intro-header">
      <div class="container">
        <div class="intro-message">
          <h1>Welcome to</h1>
          <h4>Student Management System</h4>
          <hr class="intro-divider">
          <ul class="list-inline intro-social-buttons">
            <li class="list-inline-item">
              <a href="addstudent.php" class="btn btn-secondary btn-lg">
                
                <span class="network-name">Add Student Detail</span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="updatestudent.php" class="btn btn-secondary btn-lg">
                <span class="network-name">Update Student Detail</span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="deletestudent.php" class="btn btn-secondary btn-lg">
                <span class="network-name">Delete Student Detail</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </header>
  </body>

</html>
