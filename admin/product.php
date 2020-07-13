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
				<h2>Product</h2>


					
					<?php
					if(!empty($_SESSION['status']))
					{
					?>
						<label class="alert-info"><?=$_SESSION['status'];?></label>
					<?php
							unset($_SESSION['status']);
					}
					
					?>
					<table class="table">
						<tr>
							<th colspan=8 class="text-center"><a href="addproduct.php" class="btn btn-success">Add Product</a></th>
						</tr>
						
						<tr>
							<th>S.No.</th>
							<th>Category</th>
							<th>Product Name</th>
							<th>Image</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Discount</th>
							<th>Action</th>
						</tr>
						
						
					</table>
			</section>
		</div>
	</main>
</body>
</html>