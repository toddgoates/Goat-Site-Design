<?php
if(isset($_POST['submit'])) {

    // POST variables
    $fullname = $_POST['fullname'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $deadline = $_POST['deadline'];
    $budget = $_POST['budget'];
    $nature = $_POST['nature'];
    $content = $_POST['content'];
    $more_info = $_POST['more-info'];

    // Connect to the db
    require_once('includes/db_vars.php');
    $dbc = mysqli_connect(HOST, USER, PASS, DB) or die('Could not connect to database');

    // Build and run query
    $query = "INSERT INTO " .
             "contact " .
             "(ts_created, fullname, company, email, phone, website, " .
             "deadline, budget, nature, content, more_info) " .
             "VALUES " .
             "(now(), '$fullname', '$company', '$email', '$phone', '$website', " .
             "'$deadline', '$budget', '$nature', '$content', '$more_info')";
    mysqli_query($dbc, $query) or die('Query failed');

    // Close db connection
    mysqli_close($dbc);

    // Redirect
    header('Location: contact-thanks.php');

}
?>