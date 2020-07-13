<?php
include("config/database.php");
session_start();
$admin = $_SESSION['sid'];

if(empty($admin))
{
	header("location:index.php");
}




// add Product
extract($_POST);
if(isset($addproduct))
{

	$fn = $_FILES['att']['name'];
	$tmp = $_FILES['att']['tmp_name'];

	$arr = explode('.',$fn);
	$ext = end($arr);

	if($ext=="jpg" || $ext=="jpeg")
	{
		$fnn = rand().$fn;
		$proid = "MOB".rand();
		if(mysqli_query($link,"insert into product(pid,category,mobile_name,price,quantity,discount,processor,operating_system,ram,internal_memory,camera,display,battery,colour,warranty,image) values('$proid','$cat','$mname','$price','$qua','$disc','$pro','$os','$ram','$imem','$cam','$display','$batt','$col','$war','$fnn')"))
		{
			move_uploaded_file($tmp,"images/".$fnn);
			$_SESSION['status']="Product Added Successfully";
			header("location:product.php");
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
				<h2>Add Product</h2>

								<?php
			if(!empty($msg))
			{
			?>
				<label class="alert-danger"><?=$msg?></label>
			<?php
			}
			?>
				
							<form method="post" enctype="multipart/form-data">
       
						<div class="form-group">
						<label>Category : </label>
						 <select  style="font-size:18px;" class="form-control" name="cat">
						<option style="background:lightgrey" hidden >Select</option>
							<?php
							$sel = mysqli_query($link,"select * from category");
							while($arr = mysqli_fetch_assoc($sel))
							{
							?>
								<option><?=$arr['cname']?></option>
							<?php
							}


							?>
						</select>
						</div>
						
						<div class="form-group">
						<label>Mobile Name : </label>
						<input type="text" name="mname" required class="form-control"/>
						</div>

						<div class="form-group">
						<label>Price : </label>
						<input type="text" name="price" required class="form-control"/>
						</div>

						<div class="form-group">
						<label>Quantity : </label>
						<input type="text" name="qua" required class="form-control"/>
						</div>

						<div class="form-group">
						<label>Discount : </label>
						<input type="text" name="disc"  class="form-control"/>
						</div>

						<div class="form-group">
						<label>Processor : </label>
						<input type="text" name="pro" required class="form-control"/>
						</div>

						<div class="form-group">
						<label>Operating System : </label>
						<input type="text" name="os" required class="form-control"/>
						</div>

						<div class="form-group">
						<label>Ram : </label>
						<input type="text" name="ram" required class="form-control"/>
						</div>

						<div class="form-group">
						<label>Internal Memory : </label>
						<input type="text" name="imem" required class="form-control"/>
						</div>

						<div class="form-group">
						<label>Camera : </label>
						<input type="text" name="cam" required class="form-control"/>
						</div>

						<div class="form-group">
						<label>Display : </label>
						 <input type="text" name="display" required class="form-control"/>
						</div>

						<div class="form-group">
						<label>Battery : </label>
						<input type="text" name="batt" required class="form-control"/>
						</div>

						<div class="form-group">
						<label>Colour : </label>
						<input type="text" name="col" required class="form-control"/>
						</div>

						<div class="form-group">
						<label>Warranty : </label>
						<input type="text" name="war" required class="form-control"/>
						</div>


						<div class="form-group">
						<label>Image : </label>
						<input type="file" name="att" required class="form-control"/>
						</div>

					   <input type="submit" name="addproduct" class="btn btn-success btn-lg"/>
						
					</form>	
					
			</section>
		</div>
	</main>
</body>
</html>