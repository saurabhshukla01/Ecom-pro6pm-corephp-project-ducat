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
				<h2>Welcome To Dashboard</h2>
			</section>
		</div>
	</main>
</body>
</html>