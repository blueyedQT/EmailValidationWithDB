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
	<form action="process.php" method="post">
<?php 	if(!empty($_SESSION['message'])) { ?>
		<p class='sucess'><?= $_SESSION['message'] ?></p>
<?php 		unset($_SESSION['message']); } ?>
		<h1>Email Addresses Entered:</h1>
<?php 	$query2 = "SELECT id, email, DATE_FORMAT(created_at, '%b %e, %Y %I:%i %p') AS dc FROM emails ORDER BY dc DESC";
		$emails = fetch_all($query2);
		foreach($emails as $email) { ?>
		<h4><?= $email['email'] ?></h4> <h4><?= $email['dc'] ?></h4>
		<a href="process.php?id='<?= $email['id'] ?>'">DELETE</a>
<?php 	} ?>
	</form>
</body>
</html>