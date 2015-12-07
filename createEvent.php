<?php 
	require_once("includes/sessions.php");
	if(!loggedIn())
	{
		redirectToLogin();
		die();
	}

	$author_id = $_SESSION["user_id"];
	$title = $_POST["title"];
	$information = $_POST["information"];
	$date = $_POST["date"];

	$conn = mysql_connect("127.0.0.1", "test", "test") or
	die("Connection failed");

	$mydb = mysql_select_db("WebSecurity");

	$sql = "INSERT into Events(title, information, author_id, event_date) VALUES(\"".$title."\" , \"".$information."\", ".$author_id.", \"".$date."\")";

	$result = mysql_query($sql);

	if($result)
	{
		$_SESSION["alert"] = "Event Successfully created";
		header("Location: index.php");
	}
	else
	{
		$_SESSION["alert"] = "Error: Event was not created";
		header("Location: newEvent.php");
	}
?>