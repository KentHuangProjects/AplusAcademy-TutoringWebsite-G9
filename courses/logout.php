<?php
	require_once('config.php');
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
	session_write_close();
	header('Location: '.$_SERVER['HTTP_REFERER']);
	exit();
?>
