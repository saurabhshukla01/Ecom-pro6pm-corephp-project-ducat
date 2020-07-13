<?php
include("config/database.php");
session_start();
$admin = $_SESSION['sid'];

if(empty($admin))
{
	header("location:index.php");
}




// delete category


if(!empty($_GET['delid']) && !empty($_GET['delimg']))
{
	$did = $_GET['delid'];
	$dimg = $_GET['delimg'];
	mysqli_query($link,"delete from category where id='$did'");
	@unlink("images/".$dimg);
	$_SESSION['status']="Category Delete Successfully";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>

	<?php include('head.php');?>


	<script>
		function deleteconfirm()
		{
			if(confirm("Do You Want To Delete ?"))
			{
				return true;
			}
			else
			{
				return false;
			}
		}

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
				<h2>Category</h2>

						<?php
			if(!empty($_SESSION['status']))
			{
			?>
				<label class="alert-info"><?=$_SESSION['status']?></label>
			<?php
			unset($_SESSION['status']);
			}
			?>


				<table class="table">
					<tr>
						<th colspan=5 class="text-center"><a href="addcategory.php" class="btn btn-success">Add Category</a></th>
					</tr>

					<tr>
						<th>S.No.</th>
						<th>CName</th>
						<th>Image</th>
						<th>Date</th>
						<th>Action</th>
					</tr>

					<?php
						$sel = mysqli_query($link,"select * from category order by date desc");
						$sn = 1;
						while($arr = mysqli_fetch_assoc($sel))
						{
					?>
							<tr>
								<td><?=$sn;?></td>
								<td><?=$arr['cname']?></td>
								<td><img src="images/<?=$arr['image']?>" height="30" width="80"></td>
								<td><?=$arr['date']?></td>
								<td>
									<a href="editcategory.php?editid=<?=$arr['id']?>" class="btn btn-info">Edit</a> 
									<a href="?delid=<?=$arr['id']?>&&delimg=<?=$arr['image']?>" class="btn btn-danger" onclick="return deleteconfirm()">Delete</a></td>
							</tr>
					<?php
						$sn++;
						}
					?>
				</table>
			</section>
		</div>
	</main>
</body>
</html>