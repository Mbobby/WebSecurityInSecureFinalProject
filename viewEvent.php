<?php 
	require_once("includes/sessions.php");
	if(!loggedIn())
	{
		redirectToLogin();
		die();
	}
	require_once("includes/header.php");
 ?>
 	<?php 
	 	$event_id = $_GET["event_id"];
		$conn = mysql_connect("127.0.0.1", "test", "test") or
		die("Database Connection failed");

		$mydb = mysql_select_db("WebSecurity");

		$mydb = mysql_select_db("WebSecurity");

		$sql = "SELECT * from Events where id=".$event_id.";";

		$result = mysql_query($sql);
		$numrows = mysql_num_rows($result);
		if($result)
		{
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
			{
				echo "<h2>Event Information</h2>";
				echo "<hr>";
				echo "Name: ".$row["title"]."<br>Information: ".$row["information"]."<br>";
				echo "Date: ".$row["event_date"]."<br>";
				echo "<a href=\"deleteEvent.php?event_id=".$row["id"]."\"> Delete</a>"."<br>";
			}
		}
		else
		{
			$_SESSION["alert"] = "The event was not found";
			header("Location: index.php");
		}

		mysql_close() or die("Could not close database connection");
		require_once("includes/footer.php");
 	 ?>
 