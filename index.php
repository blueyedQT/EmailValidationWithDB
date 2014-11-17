<?php 
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email Validation</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<form action="process.php" method="post">
		<?php 
		if(!empty($_SESSION['message'])) {
			echo "<p class='error'>" . $_SESSION['message'] . '</p>';
			unset($_SESSION['message']); 
		} ?>
		<h3>Please enter your email address:</h3>
		<input class="block" type="text" size="35" name="email">
		<input class="block button" type="submit" name="submit" value="Submit!">
	</form>
</body>
</html>
<?php unset($_SESSION) ?>