<?php
	require_once("includes/sessions.php");
	session_start();
	session_unset();
	session_destroy();
	header("Location:/WebSecurity/insecure/login.php");
?>
