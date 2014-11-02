<?php
if(isset($_POST['submit'])) {

	// POST variables
	$email = $_POST['email'];
	
	// Connect to the db
	require_once('includes/db_vars.php');
	$dbc = mysqli_connect(HOST, USER, PASS, DB) or die('Could not connect to database');
	
	// Build and run query
	$query = "INSERT INTO newsletter (join_date, email) VALUES (now(), '$email')";
	mysqli_query($dbc, $query) or die('Query failed');
	
	// Close db connection
	mysqli_close($dbc);
	
	// Redirect
	header('Location: newsletter-thanks.php');
	
}
?>