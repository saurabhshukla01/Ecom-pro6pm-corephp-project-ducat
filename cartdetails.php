<?php
include("admin/config/database.php");
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mobilestore Website Template | Home :: W3layouts</title>
		<?php include("head.php")?>

		<style type="text/css">
			table,tr{border:1px solid black; width:100%;}
			th{ font-weight: bold;}
			th,td{border:1px solid black; text-align:center; vertical-align: middle;}

		</style>


		
	</head>
	<body>
		
		<!----start-Header---->


		<span id="headerspan">
		<?php include("header.php"); ?>
		</span>
		<!----End-Header---->


	


		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    
		    	
		    <div class="content-grids">
		    		<?php include("cartcontent.php"); ?>
		    	</div>
		<?php include("sidebar.php") ?>
		    </div>
		    <div class="clear"> </div>
		    </div>
		    <?php include("footer.php");?>
	</body>
</html>

