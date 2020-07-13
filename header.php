		<script type="text/javascript">
			$(document).ready(function()
			{
				$('.ser').keyup(function()
				{
					var s = $(this).val();
					$.get('api.php',{usersearch:s},function(data)
						{
							$('#searchresult').html(data);
						});
				})
			})
		</script>



<div class="wrap">
		<div class="header">
			<div class="search-bar">
				<form method="post" autocomplete="off" action="search.php">
					<input type="text" name="ser" class="ser" required>

					<input type="submit" value="Search" name="search" />
					<div id="searchresult"></div>
				</form>
			</div>
			<div class="clear"> </div>
			<div class="header-top-nav">
				<ul>
					<li><a href="#">Register</a></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">Delivery</a></li>
					<li><a href="#">Checkout</a></li>
					<li><a href="#">My account</a></li>
					<li><a href="cartdetails.php"><span>shopping cart&nbsp;&nbsp;: </span><label> &nbsp;
						<?php
						include("admin/config/database.php");
							session_start();
							$sid = session_id();
							$sel = mysqli_query($link,"select * from tempcart where session='$sid'");
							$record = mysqli_num_rows($sel);
							echo $record;

						?> items</label></a></li>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		</div>
		<div class="clear"> </div>
		<div class="top-header">
			<div class="wrap">
		<!----start-logo---->
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" title="logo" /></a>
			</div>
		<!----end-logo---->
		<!----start-top-nav---->
		<div class="top-nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="store.html">Store</a></li>
				<li><a href="store.html">Featured</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
		</div>
		<!----End-top-nav---->