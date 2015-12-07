<?php 
require_once("includes/sessions.php");
require_once("includes/header.php");
?>
<div class="padding">
	<div class="full col-sm-9">

		<!-- content -->

		<div class="col-sm-12" id="featured">   
			<div class="page-header text-muted">
				Register
			</div> 
		</div>
		<form action="registerUser.php" method="post" id="form">
			User name: <input name= "username" type="text" required> <br>
			Email : <input name= "email" type="email" required> <br>
			Password : <input name="pwd" type="password" required> <br>
			Password Confirmation: <input name="pwdC" type="password" required> <br>
			<input type = "submit"> <input type="reset">	
			<hr>
		</form>
		<p id="greeting"> If you are already a member, login <a href="login.php">here</a> </p>
	</div><!-- /col-9 -->
</div><!-- /padding -->
<?php
require_once("includes/footer.php");
?>