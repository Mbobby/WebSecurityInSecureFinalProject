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
				Create New Event
			</div> 
		</div>
		<form action="createEvent.php" method="post">
			Title: <input name= "title" type="text" required> <br>
			Information: <input name="information" type="text" required> <br>
			Date: <input name="date" type="text" required> <br>
			<input type = "submit"> <input type="reset">
		</form>
	</div><!-- /col-9 -->
</div><!-- /padding -->
<?php
require_once("includes/footer.php");
?>