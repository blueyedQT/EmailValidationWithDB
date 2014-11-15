<?php
require ('connection.php');
session_start();
var_dump($_POST);

if(!empty($_POST['email'])) {
	$email = $_POST['email'];
	$_SESSION['message'] = '';
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$_SESSION['message'] = 'The email address ' . $email . ' is NOT a valid email address!';
		// header('location: index.php');
	} else {
		$query = "INSERT INTO emails (email, created_at) VALUES ('$email', NOW())";
		$results1 = run_mysql_query($query);
		if($results1) {
			$_SESSION['message'] = 'The email address '. $email . ' is a VALID email address!  Thank you!';
			// header('location: sucess.php');
		} else {
			$SESSION['message'] = 'There was an error adding your email, please try again.';
			// header('location: index.php');
		}
	}
} elseif (!empty($_POST['delete'])) {
	 echo $_POST;
}
?>