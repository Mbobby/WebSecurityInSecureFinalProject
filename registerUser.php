<?php 
	require_once("includes/sessions.php");

	if(loggedIn())
	{
		header("Location: index.php");
		die();
	}

	// get the User Name and Password
	$username = $_POST['username'];
	$email = $_POST['email']; 
	$pwd = $_POST['pwd'];
	$pwdC = $_POST['pwdC'];

		// start a connection to the mysql server and choose the database
	$conn = mysql_connect("127.0.0.1", "test", "test") or
	die("Connection failed");

	$mydb = mysql_select_db("WebSecurity");


		// write the required sql query
	$sql = "INSERT INTO  Users ( email, username, password) VALUES (\"".$email."\", \"".$username."\", \"".$pwd."\")";
	$result = mysql_query($sql);

	if ($result)
	{
		$sql = "SELECT * from Users where email=\"".$email."\";";
		$result2 = mysql_query($sql);
		$row = mysql_fetch_array($result2, MYSQL_ASSOC);

		$_SESSION['login'] = "1";
		$_SESSION['username'] = $username;
		$_SESSION['user_id'] = $row["user_id"];
		header("Location : index.php");
	}
	else
	{
		$_SESSION["alert"] = "Your account could not be created at this time, please try again.".mysql_error();
		header("Location: register.php");
	}
	mysql_close() or 
	die("Failure while trying to close connection");

?>