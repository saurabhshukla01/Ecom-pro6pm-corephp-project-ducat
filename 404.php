<?php
include("admin/config/database.php");
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mobilestore Website Template | Home :: W3layouts</title>
		<?php include("head.php")?>


		<script>
			$(document).ready(function()
			{
				$('.addcart').click(function()
				{
					var pid = $(this).attr('proid');
					var quan = $('#cquantity').val();
					$.post('api.php',{productid:pid,productquan:quan},function(res)
						{
							alert(res);
							//location.reload();
							$('#headerspan').load("header.php");
						});
				})
			})
		</script>
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
		    	<div class="error-page">
		    		<h3>404</h3>
		    		<h5>A Page Not Found 404 error occurred</h5>
		    	</div>
		  
		    
		    	</div>
		<?php include("sidebar.php") ?>
		    </div>
		    <div class="clear"> </div>
		    </div>
		    <?php include("footer.php");?>
	</body>
</html>

