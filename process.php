<?php
require ('connection.php');
session_start();
var_dump($_SESSION);

if(!empty($_POST['email'])) {
	$email = $_POST['email'];
	$_SESSION['message'] = '';
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$_SESSION['message'] = 'The email address ' . $email . ' is NOT a valid email address!';
		header('location: index.php');
		exit;
	} else {
		$query = "INSERT INTO emails (email, created_at) VALUES ('$email', NOW())";
		$results1 = run_mysql_query($query);
		if($results1) {
			$_SESSION['message'] = 'The email address '. $email . ' is a VALID email address!  Thank you!';
			header('location: sucess.php');
		} else {
			$SESSION['message'] = 'There was an error adding your email, please try again.';
			header('location: index.php');
		}
	}
} 

			exit;
		} else {
			$SESSION['message'] = 'There was an error adding your email, please try again.';
			header('location: index.php');
			exit;
		}
	}
	exit;
} elseif(!empty($_GET['id'])) {
	var_dump($_GET);
	echo $_GET['id'];
	$query = "DELETE FROM emails WHERE id = " . $_GET['id'];
	$results2 = run_mysql_query($query);
	if($results2 == 0) {
		$_SESSION['message'] = 'The email was sucessfully deleted!';
	} else {
		$SESSION['message'] = 'There was an error deleting your email, please try again...';
	}
	header('location: sucess.php');	
	exit;
} else {
	$_SESSION['message'] = 'You did not enter in an email address!';
	header('location: index.php');
}
?>