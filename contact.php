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
							    	<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h2>Find Us Here</h2>
			    	 		<div class="map">
					   			<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d224561.1844111207!2d77.3834224567585!3d28.42624120697163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sducat+noida!5e0!3m2!1sen!2sin!4v1548078460607" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h2>Company Information :</h2>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span><a href="mailto:info@mycompany.com">info@mycompany.com</a></span></p>
				   		<p>Follow on: <span><a href="#">Facebook</a></span>, <span><a href="#">Twitter</a></span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form>
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" value=""></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="text" value=""></span>
						    </div>
						    <div>
						     	<span><label>MOBILE.NO</label></span>
						    	<span><input type="text" value=""></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit"></span>
						  </div>
					    </form>
				    </div>
  				</div>				
			  </div>
			  	 <div class="clear"> </div>
		    </div>
		    <div class="clear"> </div>
		    </div>
		    <?php include("footer.php");?>
	</body>
</html>

