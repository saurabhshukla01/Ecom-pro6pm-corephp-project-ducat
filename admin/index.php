<?php 

include("config/database.php");

extract($_POST);

if(isset($login))
{

	// sql injection 	
	$em = mysqli_real_escape_string($link,htmlentities(trim($em)));
	$pass = mysqli_real_escape_string($link,htmlentities(trim($pass)));


	$sel = mysqli_query($link,"select * from admin where email='$em'");
	$arr = mysqli_fetch_assoc($sel);

	if($em == $arr['email'] && md5($pass) == $arr['password'])
	{
		session_start();
		$_SESSION['sid']=$em;
		header("location:dashboard.php");
	}
	else
	{
		$msg = "Invalid Login";
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		#eyediv{position: relative;}

		#eye{
			position: absolute;
			right:5%;
			top:60%;
		}	
	</style>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<script type="text/javascript">
		
		function eyepassword()
		{
			if(document.getElementById('pass').type == "password")
			{
				document.getElementById('pass').type = "text";
				document.getElementById('eye').className = "glyphicon glyphicon-eye-close";
			}
			else
			{
				document.getElementById('pass').type = "password";
				document.getElementById('eye').className = "glyphicon glyphicon-eye-open";
			}
		}
	</script>
</head>
<body>
	<main>
		<header class="jumbotron"><h1 class="text-center">Admin Panel</h1></header>

		<form method="post">
		<section class="container">

			<?php
			if(!empty($msg))
			{
			?>
				<label class="alert-danger"><?=$msg?></label>
			<?php
			}
			?>

			<div class="form-group">	
				<label class="text-primary">Email</label>
				<input type="email" name="em" class="form-control" required>
			</div>			

			<div class="form-group" id="eyediv">				
				<label class="text-primary">Password</label><label class="glyphicon glyphicon-eye-open" id="eye" onclick="eyepassword()"></label>
				<input type="password" name="pass" id="pass" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="submit" name="login" value="Login" class="btn btn-success">
			</div>
		</section>
		</form>
	</main>
</body>
</html>