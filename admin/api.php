<?php 	

include("config/database.php");
session_start();
$admin = $_SESSION['sid'];


if(!empty($_GET['oldpass']) && !empty($_GET['newpass']))
{
		$op = $_GET['oldpass'];
		$np = $_GET['newpass'];

		$sel = mysqli_query($link,"select * from admin where email='$admin'");
		$arr = mysqli_fetch_assoc($sel);

		if(md5($op) == $arr['password'])
		{
			$np = md5($np);
			if(mysqli_query($link,"update admin set password='$np' where email='$admin'"))
			{
				echo "Password Change Successfully";
			}
		}
		else
		{
			echo "Old Password Incorrect";
		}
		
}


 ?>