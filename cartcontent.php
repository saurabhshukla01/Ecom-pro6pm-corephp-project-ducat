<?php
include("admin/config/database.php");
@session_start();
$sid = session_id();


?>


<script>
			// delete cart
			$(document).ready(function()
			{
				$('.delcart').click(function()
				{
					var id = $(this).attr('itemid');
					$.post('api.php',{deleteid:id},function(res)
						{
							//alert(res);
							$('.content-grids').load("cartcontent.php");
							$('#headerspan').load("header.php");
						});
				})
			})



			//update cart

			$(document).ready(function()
			{
				$('.updatecart').click(function()
				{
					var id = $(this).attr('itemid');
					var quan = $(this).attr('itemquan');
					alert(quan+id);					
				})
			})
		</script>
<h4>Cart Details</h4>
		  
		    		<table>
		    			<?php
		    				$sel = mysqli_query($link,"select * from tempcart where session='$sid'");
		    				$record = mysqli_num_rows($sel);
		    				if($record>0)
		    				{
		    				?>
		    					<tr>
		    						<th>S.No.</th>
		    						<th>Product Name</th>
		    						<th>Image</th>
		    						<th>Price</th>
		    						<th>Quantity</th>
		    						<th>Total Price</th>
		    						<th>Delete</th>
		    					</tr>
		    				<?php
		    					$sn = 1;
		    					$gt = 0;
		    					while($arr = mysqli_fetch_assoc($sel))
		    					{
		    						//print_r($arr);
		    						//echo "<br><br>";
		    						$id = $arr['proid'];
		    						$sel2 = mysqli_query($link,"select * from product where pid='$id'");
		    						$arr2 = mysqli_fetch_assoc($sel2);
		    						//print_r($arr2);
		    						//echo "<br><br>";

		    						$price = $arr2['price']-($arr2['price']*$arr2['discount'])/100;
		    							$tp = $arr['quantity']*$price;
		    							$gt = $gt+$tp;
		    					?>
		    						<tr>
		    							<td><?=$sn;?></td>
		    							<td><?=$arr2['mobile_name']?></td>
		    							<td><img src="admin/images/<?=$arr2['Image']?>" height="100"></td>
		    							<td>Rs <?=round($price)?></td>
		    							<td>
		    								<img src="admin/images/dec.jpg" height=10 class="updatecart" itemid="<?=$arr['id']?>" itemquan="<?=$arr['quantity']-1?>">
		    								<?=$arr['quantity']?>
		    								<img src="admin/images/inc.jpg" height=20 class="updatecart" itemid="<?=$arr['id']?>" itemquan="<?=$arr['quantity']+1?>">
		    								</td>
		    							<td>Rs <?=round($tp)?></td>
		    							<td><a href="javascript:void();" class="delcart" itemid=<?=$arr['id']?>><img src="admin/images/delete.jpg" height="20px"></a></td>
		    						</tr>
		    					<?php
		    					$sn++;
		    					}
		    					?>
		    					<tr>
		    						<th colspan=5>Grand Total</th>
		    						<th>Rs <?=round($gt)?></th>
		    					</tr>
		    				<?php
		    				}
		    				else
		    				{
		    				?>
		    					<tr>
		    						<th>No Items In Your Cart</th>
		    					</tr>
		    				<?php
		    				}
		    			?>
		    		</table>