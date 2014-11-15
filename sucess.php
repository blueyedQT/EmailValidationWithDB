<?php 
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email Validation - Sucess</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<?php if(!empty($_SESSION['message'])) {
		echo "<p class='sucess'>" . $_SESSION['message'] . "</p>";
		unset($_SESSION['message']);
	}
	?>
</body>
</html>
<?php session_destroy(); ?>