<?php 
session_start();
require_once('connection.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email Validation - Sucess</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php 
	if(!empty($_SESSION['message'])) { ?>
	<p class='sucess'><?= $_SESSION['message'] ?></p>
<?php 	unset($_SESSION['message']); } ?>
	<h1>Email Addresses Entered:</h1>
	<form action="process.php" method="post">
<?php 
	$query2 = "SELECT id, email, DATE_FORMAT(created_at, '%b %e, %Y %I:%i %p') AS dc FROM emails";
	$emails = fetch_all($query2);
	foreach($emails as $email) { ?>
	<h4><?= $email['email'] ?></h4> <h4><?= $email['dc'] ?></h4>
	<!-- <input type="hidden" name="<?= $email['id'] ?>" value=""/> -->
	<input type="submit" name="<?= $email['id'] ?>" value="Delete!"/>
<?php 
	} ?>
	</form>
</body>
</html>
<?php session_destroy(); ?>