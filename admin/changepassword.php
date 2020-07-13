<?php
session_start();
$admin = $_SESSION['sid'];

if(empty($admin))
{
	header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>

	<?php include('head.php');?>

	<script>
			$(document).ready(function()
			{
				$('.updatepass').click(function()
				{

					var op = $('#op').val();
					var np = $('#np').val();
					var cp = $('#cp').val();

					if(np == cp)
					{
						$.get('api.php',{oldpass:op,newpass:np},function(data)
							{
								$('#op').val("");
								$('#np').val("");
								$('#cp').val("");
								$('.message').html(data);
							});
					}
					else
					{
							$('.message').html("New Password and Confirm Password are not matching");
					}
				})
			})
	</script>
</head>
<body>
	<main>
		<header>
			<?php include("navbar.php"); ?>
		</header>

		<div>
			<aside class="col-sm-4">
				<?php include("sidebar.php") ?>
			</aside>
			<section class="col-sm-8">
				<h2>Change Password</h2>

				
		
				<label class="alert-info message">	</label>
			

			<div class="form-group">	
				<label class="text-primary">Old Password</label>
				<input type="password" id="op" class="form-control" required>
			</div>			

			<div class="form-group">
				<label class="text-primary">New Password</label>
				<input type="password" id="np" class="form-control" required>
			</div>

			<div class="form-group">
				<label class="text-primary">Confirm Password</label>
				<input type="password" id="cp" class="form-control" required>
			</div>

			<div class="form-group">
				<a href="javascript:void" class="btn btn-success updatepass">Submit</a>
			</div>
		</section>
		
			
			</section>
		</div>
	</main>
</body>
</html>