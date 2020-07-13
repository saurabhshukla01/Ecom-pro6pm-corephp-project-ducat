<?php
include("admin/config/database.php");
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mobilestore Website Template | Home :: W3layouts</title>
		<?php include("head.php")?>
	</head>
	<body>
		<div class="wrap">
		<!----start-Header---->
		<?php include("header.php"); ?>
		<!----End-Header---->


	


		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    
		    	
		    <div class="content-grids">

		    	<?php

		    		extract($_POST);

		    	?>


		    	<h4>Latest Products</h4>
		    	<div class="section group">

		    	<?php
		    	$sel = mysqli_query($link,"select * from product where category like '$ser%' or colour like '$ser%'");
		    	while($arr = mysqli_fetch_assoc($sel))
		    	{
		    		//print_r($arr);
		    		//echo "<br><br>";
		    	?>

				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <a href="productdetails.php?proid=<?=$arr['pid']?>"><img src="admin/images/<?=$arr['Image']?>" ></a>
					 <a href="single.html"><?=$arr['mobile_name']?></a>
					 <h3 style="color:red; text-decoration: line-through;">Rs <?=$arr['price']?> /-</h3>
					 <h3 style="color:blue; "><?=$arr['discount']?> %off</h3>
					 <h3 style="color:Green; ">Now Rs <?php echo number_format(round($arr['price']-($arr['price']*$arr['discount'])/100)) ?> /-</h3>
					 <ul>
					 	<li><a  class="cart" href="single.html"> </a></li>
					 	<li><a  class="i" href="productdetails.php?proid=<?=$arr['pid']?>"> </a></li>
					 
					 </ul>
				</div>
				<?php

					}
		    	?>
		
			</div>

		    
		    	</div>
		<?php include("sidebar.php") ?>
		    </div>
		    <div class="clear"> </div>
		    </div>
		    <?php include("footer.php");?>
	</body>
</html>

