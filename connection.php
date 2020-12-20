<?php
	$Servername = "localhost";
	$username = "mw6mzy0jq0q4";
	$password = ""; //Password Not GIven for Security Purpose
 	$con = mysqli_connect($Servername,$username,$password); //server connect
	$dbcon = mysqli_select_db($con,"db_data_user");
	if(!$con){
	echo "Connection not established to Database";
	die();
	}
	else
	//	echo "Successful";
?>
