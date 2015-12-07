<?php 
	require_once("includes/sessions.php");

	if(loggedIn())
	{
		header("Location: index.php");
		die();
	}

	// get the User Name and Password
	$username = $_POST['username']; 
	$pwd = $_POST['pwd'];

		// start a connection to the mysql server and choose the database
	$conn = mysql_connect("127.0.0.1", "test", "test") or
	die("Connection failed");

	$mydb = mysql_select_db("WebSecurity");


		// write the required sql query
	$sql = "SELECT * FROM Users where BINARY username='".$username."' and BINARY password='".$pwd."';";
	$result = mysql_query($sql);
	$numrows = mysql_num_rows($result);

	if ($numrows != 0)
	{
		$row = mysql_fetch_array($result);
		$name = $row['username'];
		$passcode = $row['password'];
		$_SESSION['login'] = "1";
		$_SESSION['username'] = $username;
		$_SESSION['user_id'] = $row['user_id'];
		header("Location: index.php");
	}
	else
	{
		$_SESSION["alert"] = "Your username and password combination is wrong, please try again with the right information.";
		header("Location: login.php");
	}
	mysql_close() or 
	die("Failure while trying to close connection");
?>