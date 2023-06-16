<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="admin/css/login.css">

	  <style type="text/css">
	  #buttn{
		  color:#fff;
		  background-color: #734d26;
	  }
	  </style>
  
</head>

<body>
<?php
include("connection/connect.php"); //INCLUDE CONNECTION
error_reporting(0); // hide undefine index errors
session_start(); // temp sessions
// Memeriksa apakah pengguna telah login
if(isset($_POST['submit']))   // if button is submit
{
	$username = $_POST['username'];  //fetch records from login form
	$password = $_POST['password'];
	
	if(!empty($_SESSION["submit"])){   // if records were not empty
		$loginquery1 ="SELECT * FROM users WHERE username='$username' && password='".md5($password)."'"; //selecting matching records
		$result1=mysqli_query($db, $loginquery1); //executing
		$row1=mysqli_fetch_array($result1);

		$loginquery2 ="SELECT * FROM admin WHERE username='$username' && password='".md5($password)."'"; //selecting matching records
		$result2=mysqli_query($db, $loginquery2); //executing
		$row2=mysqli_fetch_array($result2);
		if(is_array($row1))  // if matching records in the array & if everything is right
			{
				$_SESSION["user_id"] = $row1['u_id']; // put user id into temp session
				header("refresh:1;url=index.php"); // redirect to index.php page
			}
			else if (is_array($row2)){
				$_SESSION["adm_id"] = $row2['adm_id']; // put user id into temp session
				header("refresh:1;url=admin/dashboard.php"); // redirect to index.php page
			} 
		else
			{
					$message = "Invalid Username or Password!"; // throw error
			}					
	}	
}
?>

<div class="container">
  <div class="info">
    <h1><b>CoffeVibes<b></h1><span>Admin login page</span>
  </div>
</div>
<div class="form">
	<div class="thumbnail"><img src="admin/images/manager.png"/></div>
  		<span style="color:red;"><?php echo $message; ?></span>
   		<span style="color:green;"><?php echo $success; ?></span>
  		<form class="login-form" action="login.php" method="post">
    		<input type="text" placeholder="username" name="username"/>
    		<input type="password" placeholder="password" name="password"/>
    		<input type="submit"  name="submit" value="Login" />
    		<p class="message">Tidak terdaftar? <a href="registration.php">Buat akun</a></p>
  		</form> 
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
