<?php 
extract($_POST);

if(isset($logout))
{
	header("location:logout.php");
}

 ?>





<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="#">WebSiteName</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="#">Home</a></li>
			      <li><a href="changepassword.php">Change Password</a></li>
			      
			    </ul>
			    <ul class="nav navbar-nav navbar-right">
			      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome : <?=$admin;?></a></li>
			      <li><a href="javascript:void();" data-toggle="modal" data-target="#logoutModal"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			    </ul>
			  </div>
			</nav>









<!--Logout Modal -->
<div id="logoutModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Logout</h4>
      </div>
      <div class="modal-body">
        <p>Are Your Sure To Logout ?</p>
      </div>
      <div class="modal-footer">
      	<form method="post">
      	<input type="submit" name="logout" value="Yes, Logout" class="btn btn-success">
        <button type="button" class="btn btn-danger" data-dismiss="modal">No, Cancel</button>
        </form>
      </div>
    </div>

  </div>
</div>