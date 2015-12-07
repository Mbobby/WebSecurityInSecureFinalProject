<?php
	require_once("includes/sessions.php");
	if(!loggedIn())
	{
		redirectToLogin();
		die();
	}

	$id = $_SESSION["user_id"];
	$name = $_SESSION["username"];

	//Open connection
	$conn = mysql_connect("127.0.0.1", "test", "test") or
	die("Connection failed");

	$mydb = mysql_select_db("WebSecurity");

	$sql = "SELECT * FROM Events where author_id=".$id.";";
	$result = mysql_query($sql);
	$numrows = mysql_num_rows($result);
	if($numrows == 0)
	{
		echo "Sorry, you have no current events to see<br>";
	}
	else
	{
		echo "<h2>Events</h2>";
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
		{
			echo "<hr>";
    		echo "Name: ".$row["title"]."<br>Information: ".$row["information"]."<br>";
    		echo "<a href=\"viewEvent.php?event_id=".$row["id"]."\"> View</a>"."<br>";
    		echo "<a href=\"deleteEvent.php?event_id=".$row["id"]."\"> Delete</a>"."<br>";
    		echo "<hr>";
		}
	}

	echo "Create new Event <a href=\"newEvent.php\">here.</a><br>";
	//Close connection
	if (isset($conn) && is_resource($conn)) 
	{
		mysql_close($conn) or 
	die("Failure while trying to close connection");;
	} 
	else 
	{
		mysql_close() or 
	die("Failure while trying to close connection");;
	}

?>