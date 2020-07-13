<?php 

include("admin/config/database.php");
session_start();

// search product 
if(!empty($_GET['usersearch']))
{
	$us = trim($_GET['usersearch']);

	if(!empty($us))
	{
		$sel = mysqli_query($link,"select * from product where mobile_name like '$us%'");
		while($arr = mysqli_fetch_assoc($sel))
		{
			$mn = $arr['mobile_name'];
			$id = $arr['pid'];

			echo "<a href='productdetails.php?proid=$id'>$mn</a><br>";
		}

	}

}







// add cart product
if(!empty($_POST['productid']) && !empty($_POST['productquan']))
{
	$sid = session_id();
	$prodid = $_POST['productid'];
	$proquan = $_POST['productquan'];

	$sel = mysqli_query($link,"select * from tempcart where session='$sid' and proid='$prodid'");
	$record = mysqli_num_rows($sel);
	if($record>=1)
	{
		mysqli_query($link,"update tempcart set quantity=quantity+'$proquan' where session='$sid' and proid='$prodid'");
		echo "Cart Update Successfully";
	}
	else
	{
		mysqli_query($link,"insert into tempcart(session,proid,quantity) values ('$sid','$prodid','$proquan')");
		echo "Cart Added Successfully";		
	}



}




// delete product from cart

if(!empty($_POST['deleteid']))
{
	$did = $_POST['deleteid'];
	mysqli_query($link,"delete from tempcart where id='$did'");
	//echo "Item Delete Successfully";
}


 ?>