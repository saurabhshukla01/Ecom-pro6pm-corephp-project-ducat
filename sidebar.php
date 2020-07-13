	    	<script>

	    		$(document).ready(function()
	    		{
	    			$('.category').click(function()
	    			{
	    				var cn = $(this).attr('cn');
	    				$('#sliderarea').hide();
	    				$('.content-grids').load("category.php",{catname:cn});
	    			})
	    		})


	    	</script>


	    	<div class="content-sidebar">
		    		<h4>Categories</h4>
						<ul>
							<?php
							$sel = mysqli_query($link,"select * from category");
							while($arr = mysqli_fetch_assoc($sel))
							{
							?>
								<li><a href="javascript:void()" class="category" cn="<?=$arr['cname'];?>"><?=$arr['cname']?></a></li>
							<?php
							}
							?>
							
							
						</ul>
		    	</div>