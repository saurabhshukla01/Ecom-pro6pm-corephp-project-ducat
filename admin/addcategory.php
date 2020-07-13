<?php
include("config/database.php");
session_start();
$admin = $_SESSION['sid'];

if(empty($admin))
{
	header("location:index.php");
}




// add category
extract($_POST);
if(isset($addcat))
{

	$fn = $_FILES['att']['name'];
	$tmp = $_FILES['att']['tmp_name'];

	$arr = explode('.',$fn);
	$ext = end($arr);

	if($ext=="jpg" || $ext=="jpeg")
	{
		$fnn = rand().$fn;
		if(mysqli_query($link,"insert into category(cname,image) values('$cn','$fnn')"))
		{
			move_uploaded_file($tmp,"images/".$fnn);
			$_SESSION['status']="Category Added Successfully";
			header("location:category.php");
			exit();
		}
		else
		{
			$msg = "Category Already Exist";
		}
	}
	else
	{
		$msg = "Only Jpg, jpeg file allowed";
	}

	
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
				<h2>Add Category</h2>

				<?php
			if(!empty($msg))
			{
			?>
				<label class="alert-danger"><?=$msg?></label>
			<?php
			}
			?>

				<form method="post" enctype="multipart/form-data">
		<section >

			

			<div class="form-group">	
				<label class="text-primary">Category Name</label>
				<input type="text" name="cn" class="form-control" required>
			</div>			

			<div class="form-group">
				<label class="text-primary">Image</label>
				<input type="file" name="att" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="submit" name="addcat" class="btn btn-success">
			</div>
		</section>
		</form>
			</section>
		</div>
	</main>
</body>
</html>