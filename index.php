<?php 
require_once("includes/sessions.php");

if(!loggedIn())
{
	redirectToLogin();
	die();
}
require_once("includes/header.php");
?>
<div class="padding">
	<div class="full col-sm-9">

		<!-- content -->

		<div class="col-sm-12" id="featured">   
			<div class="page-header text-muted">
				Events Manager
			</div> 
		</div>
		<?php
		
		if(loggedIn())
		{
			echo "<br><br>";
			echo "Welcome ".$_SESSION['username']."!!<br><br>";
			include "viewEvents.php";
		}
		else
		{
			include "login.php";
		}
		require_once("includes/footer.php");
		?>
	</div><!-- /col-9 -->
</div><!-- /padding -->