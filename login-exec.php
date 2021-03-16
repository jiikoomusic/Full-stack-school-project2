<?php

	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Virhe yhdistäessä palvelimelle: ' . mysqli_error());
	}
	
	//Select database
	$db = mysqli_select_db($link, DB_DATABASE);
	if(!$db) {
		die("Virhe yhdistäessä tietokantaan");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$Kirjautumistunnus = ($_POST['Kirjautumistunnus']);
	$Salasana = ($_POST['Salasana']);
	
	//Input Validations
	if($Kirjautumistunnus == '') {
		$errmsg_arr[] = 'Kirjautumistunnus puuttuu';
		$errflag = true;
	}
	if($Salasana == '') {
		$errmsg_arr[] = 'Salasana puuttuu';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login-form.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM sutinenoy WHERE Kirjautumistunnus='$Kirjautumistunnus' AND Salasana='".md5($_POST['Salasana'])."'";
	$result=mysqli_query($link, $qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_TUNNUS'] = $member['Kirjautumistunnus'];
			$_SESSION['SESS_SALASANA'] = $member['Salasana'];
			$_SESSION['SESS_NIMI'] = $member['Nimi'];
			$_SESSION['SESS_ADMIN'] = $member['ADMINOIKEUDET'];
			session_write_close();
			header("location: member-index.php");
			exit();
		}else {
			//Login failed
			header("location: login-failed.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>