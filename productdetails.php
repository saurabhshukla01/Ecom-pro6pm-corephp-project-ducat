<?php
include("admin/config/database.php");
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mobilestore Website Template | Home :: W3layouts</title>
		<?php include("head.php")?>
		<style type="text/css">
			table{width:100%; border:1px solid black;}
			tr,th{border:1px solid black;}
			th{width:50%;}
		</style>
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
		    	$proid = $_GET['proid'];

		    	$sel = mysqli_query($link,"select * from product where pid='$proid'");

		    	$record = mysqli_num_rows($sel);
		    	if($record<=0)
		    	{
		    		header("location:404.php");
		    	}

		    	$arr = mysqli_fetch_assoc($sel);

		    	//print_r($arr);

		    	?>

		    			    	<div class="details-page">
		    		<div class="back-links">
		    			<ul>
		    				<li><a href="#">Home</a><img src="images/arrow.png" alt=""></li>
		    				<li><a href="#">Product</a><img src="images/arrow.png" alt=""></li>
		    				<li><a href="#">Product-Details</a><img src="images/arrow.png" alt=""></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<div class="detalis-image">
		    		<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/m11.jpg">
								<div class="thumb-image"> <img src="admin/images/<?=$arr['Image']?>" data-imagezoom="true" class="img-responsive" alt="" /> </div>
							</li>
							
						</ul>
					</div>
		    	</div>
		    	<div class="detalis-image-details">
		    		<br />
		    		<div class="brand-value">
		    			<h3><?=$arr['mobile_name']?></h3>
		    			<div class="left-value-details">
			    			<ul>
			    				<li>Price:</li>
			    				<li><span>Rs <?=$arr['price']?></span></li>
			    				<li><h5>Rs <?php echo number_format(round($arr['price']-($arr['price']*$arr['discount'])/100)) ?> /-</h5></li>
			    				<br />
			    				<li><p>Not rated</p></li>
			    			</ul>
		    			</div>
		    			<div class="right-value-details">
		    				<?php
		    				if($arr['quantity']<=0)
		    				{
		    				?>
		    					<a href="#">Out of stock</a>
		    				<?php
		    				}
		    				else
		    				{
		    				?>
		    					<a href="#">Instock</a>
		    				<?php
		    				}

		    				?>
			    			
			    			<p>No reviews</p>
		    			</div>
		    			<div class="clear"> </div>
		    		</div>
		    		
		    		
		    		<div class="brand-history" style="width:100%">
		    				<table>
		    					<tr>
		    						<th>Ram</th>
		    						<th><?=$arr['ram']?></th>
		    					</tr>

		    					<tr>
		    						<th>Camera</th>
		    						<th><?=$arr['camera']?></th>
		    					</tr>

		    					<tr>
		    						<th>Display</th>
		    						<th><?=$arr['display']?></th>
		    					</tr>
		    				</table>
		    			<br>
		    			
		    			<a href="#">Addcart</a>
		    		</div>
		    	
		    		<div class="clear"> </div>
		    		
		    		</div>
		    		<div class="clear"> </div>
		    

		    
		    	</div>
		<?php include("sidebar.php") ?>
		    </div>
		    <div class="clear"> </div>
		    </div>
		    <?php include("footer.php");?>
	</body>
</html>

