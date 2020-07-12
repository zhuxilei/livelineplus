<nav class="container-fluid bg-light p-2">
	<div class="row">
		<div class="col-12 d-flex justify-content-front">
		<a class="p-2 text-right" href="home.php">Home</a>
	
	<?php if(!isset($_SESSION["logged_in"]) || !$_SESSION["logged_in"]) : ?>

			<a class="p-2 text-right" href="login.php">Login</a>
			<a class="p-2 text-right" href="registration.php">Sign up</a>

	<?php else: ?>

			<div class="p-2">Hello <?php echo $_SESSION["username"]; ?>!</div>
			<a class="p-2" href="logout.php">daily Symptom Chech</a>
			<a class="p-2" href="logout.php">My Health Code</a>
			<a class="p-2" href="logout.php">Covid-19 Live Map</a>

			<a class="p-2" href="logout.php">Logout</a>
			
	<?php endif; ?>

		</div>
	</div> <!-- .row -->
</nav>