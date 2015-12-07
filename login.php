<?php 
	require_once("includes/sessions.php");
	if(loggedIn())
	{
		$_SESSION["alert"] = "You are already logged in!";
		header("Location: index.php");
		die();
	}
	require_once("includes/header.php");

?>
<div class="padding">
	<div class="full col-sm-9">

		<!-- content -->

		<div class="col-sm-12" id="featured">   
			<div class="page-header text-muted">
				Login
			</div> 
		</div>
	<form action="checkPW.php" method="post" id="form">
		User name: <input name= "username" type="text" required> <br>
		Password : <input name="pwd" type="password" required> <br>
		<input type = "submit"> <input type="reset">	
		<hr>
	</form>
	<p id="greeting"> If you are new, please register <a href="register.php"><button>Register</button></a></p>
	</div><!-- /col-9 -->
</div><!-- /padding -->
<?php
	require_once("includes/footer.php");
?>