<?php 
require_once("sessions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Events Manager</title>
	<meta name="generator" content="Bootply" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
			<link href="css/styles.css" rel="stylesheet">
		</head>
		<body>
			<div class="wrapper">
				<div class="box">
					<div class="row">
						<!-- sidebar -->
						<div class="column col-sm-3" id="sidebar">
							<a class="logo" href="#">E</a>
							<ul class="nav">
								<li class="active"><a href="index.php">Home</a>
								</li>
								<?php
									if(loggedIn())
									{
										echo "<li><a href=\"logout.php\">Logout</a>";
										echo "</li>";
									}
								?>
							</ul>
							<ul class="nav hidden-xs" id="sidebar-footer">
								<li>
									<h3>InSecure Events Manager</h3>Made with <i class="glyphicon glyphicon-heart-empty"></i> by Emmanuel E. Mong
								</li>
							</ul>
						</div>
						<!-- /sidebar -->
						
						<!-- main -->
						<div class="column col-sm-9" id="main">
							<?php
							if($_SESSION["alert"])
							{
								echo "<div class=\"alert alert-success\" role=\"alert\">".$_SESSION["alert"]."</div>";
								unset($_SESSION["alert"]);
							}
							?>