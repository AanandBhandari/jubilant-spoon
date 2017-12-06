<html>
<head>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="css/style.css"> 
</head>
<body>
	
<div class="login-page">
  <div class="form">
  	<form action="login.php" method="post" class="login-form">
  		<button>ADMIN LOGIN</button>
  	</form>
    <h3 align="center">Student Information</h3>
    <form action="admin/viewstudent.php" method="POST" class="login-form" >
      <label for="rollno">Enter Rollno:</label>
      <input type="text" placeholder="Rollno" id="rollno"name="rollno" required/>
    	<table>
        <tr>
          <td><label for="std">Enter Standad:</label></td>
      <td >
        <select name="std" >
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
      
      <button>Show Info</button>
      
    </form>
  </div>
</div>
</body>
</html>