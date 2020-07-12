<?php

require 'config.php';
$isInserted = false;
var_dump($_POST);


if ( !isset($_POST['name']) || empty($_POST['name'])
	|| !isset($_POST['county']) || empty($_POST['county'])
    || !isset($_POST['confirmed']) || empty($_POST['confirmed'])
    || !isset($_POST['close_contact']) || empty($_POST['close_contact']) 
    || !isset($_POST['symptom']) || empty($_POST['symptom'])) {
	$error = "Please fill out all required fields.";
}

else{
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if($mysqli->connect_errno) {
		echo $mysqli->connect_error;
		exit();
    }


}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<div class="container">
		<div class="row">
			<h1 class="col-12 mt-4">User Registration</h1>
		</div> <!-- .row -->
	</div> <!-- .container -->

	<div class="container">

		<div class="row mt-4">
			<div class="col-12">
				<?php if ( isset($error) && !empty($error) && $isInserted==false) : ?>
					<div class="text-danger"><?php echo $error; ?></div>
				<?php else: ?>
					<div class="text-success"><?php echo $_POST['username']; ?> was successfully registered.</div>
				<?php endif; ?>
		</div> <!-- .col -->
	</div> <!-- .row -->

	<div class="row mt-4 mb-4">
		<div class="col-12">
			<a href="login.php" role="button" class="btn btn-primary">Login</a>
			<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" role="button" class="btn btn-light">Back</a>
		</div> <!-- .col -->
	</div> <!-- .row -->
    
</body>
</html>