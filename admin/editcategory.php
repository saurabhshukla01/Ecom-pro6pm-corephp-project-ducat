<?php
include("config/database.php");
session_start();
$admin = $_SESSION['sid'];

if(empty($admin))
{
	header("location:index.php");
}



$eid = $_GET['editid'];


// get category by id
$sel = mysqli_query($link,"select * from category where id='$eid'");
$arr =mysqli_fetch_assoc($sel);
$oldimage = $arr['image'];




// update category
extract($_POST);

if(isset($editcat))
{
	$fn = $_FILES['att']['name'];
	$tmp = $_FILES['att']['tmp_name'];

	if(empty($fn))
	{
		// update only cname
		if(mysqli_query($link,"update category set cname='$cn' where id='$eid'"))
		{
			$_SESSION['status']="Category Update Successfully";
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
		// update cname and image


		$arr2 = explode('.',$fn);
		$ext = end($arr2);

		if($ext=="jpg" || $ext=="jpeg")
		{
			$fnn = rand().$fn;
			if(mysqli_query($link,"update category set cname='$cn',image='$fnn' where id='$eid'"))
			{
				move_uploaded_file(	$tmp,"images/".$fnn);
				unlink("images/".$oldimage);
				$_SESSION['status']="Category Update Successfully";
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
			$msg = "Only Jpg or Jpeg Allowed";
		}












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
				<h2>Edit Category</h2>

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
				<input type="text" name="cn" value="<?=$arr['cname']?>" class="form-control" required>
			</div>			

			<div class="form-group">
				<label class="text-primary">Image</label>
				<input type="file" name="att" class="form-control" >
			</div>

			<div class="form-group">
				<input type="submit" name="editcat" class="btn btn-success">
			</div>
		</section>
		</form>
			</section>
		</div>
	</main>
</body>
</html>