<?php 
	require_once("includes/sessions.php");

	if(!loggedIn())
	{
		redirectToLogin();
		die();
	}
	$event_id = $_GET["event_id"];
	$conn = mysql_connect("127.0.0.1", "test", "test") or
	die("Database Connection failed");

	$mydb = mysql_select_db("WebSecurity");

	$mydb = mysql_select_db("WebSecurity");

	$sql = "DELETE from Events where id=".$event_id.";";

	$result = mysql_query($sql);

	if($result)
	{
		$_SESSION["alert"] = "The Event has been deleted";
		header("Location: index.php");
		die();
	}
	else
	{
		$_SESSION["alert"] = "The event was not able to be deleted at this time.";
		header("Location: index.php");
	}

	mysql_close() or die("Could not close database connection");
?>