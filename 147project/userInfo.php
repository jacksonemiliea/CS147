<?php
	include("config.php");
	$user = $_COOKIE['userID'];
	$userName = $_COOKIE['userName'];
		$query = "INSERT into users (userID, name) VALUES ('$user','$userName')";	$result = mysql_query($query);?>