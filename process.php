<?php
session_start();
var_dump($_POST);

if(isset($_POST)) {
	$email = $_POST['email'];
	$_SESSION['message'] = '';
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$_SESSION['message'] = 'The email address ' . $email . ' is NOT a valid email address!';
		header('location: index.php');
	} else {
		$_SESSION['message'] = 'The email address '. $email . ' is a VALID email address!  Thank you!';
		header('location: sucess.php');
	}
}
?>