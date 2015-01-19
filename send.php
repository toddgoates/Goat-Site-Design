<?php
if(isset($_POST['submit'])) {

    // POST variables
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $reason = $_POST['reason'];
    
    if(isset($_POST['message'])) { $message = $_POST['message']; }
    
    if(isset($_POST['help'])) { $help = $_POST['help']; }
    if(isset($_POST['budget'])) { $budget = $_POST['budget']; }
    if(isset($_POST['timeline'])) { $timeline = $_POST['timeline']; }
    if(isset($_POST['details'])) { $details = $_POST['details']; }

    // Connect to the db
    require_once('includes/db_vars.php');
    $dbc = mysqli_connect(HOST, USER, PASS, DB) or die('Could not connect to database');

    // Build and run query
    $query = "INSERT INTO "
            ."contact "
            ."(ts_created, fullname, email, phone, reason, "
            ."message, help, budget, timeline, details) "
            ."VALUES "
            ."(now(), '$fullname', '$email', '$phone', '$reason', "
            ."'$message', '$help', '$budget', '$timeline', '$details')";
    mysqli_query($dbc, $query) or die('Query failed');

    // Close db connection
    mysqli_close($dbc);

    // Redirect
    header('Location: contact-thanks.php');

}
?>