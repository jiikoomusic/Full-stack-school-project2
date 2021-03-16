<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_NIMI']) || (trim($_SESSION['SESS_NIMI']) == '')) {
		header("location: access-denied.php");
		exit();
	}
?>