<?php
if(isset($_POST['submit'])) {

	// POST variables
	$email = $_POST['email'];

    if(!empty($email) && $email != '') {

        // Create PDO object
        try {

            // Connect to the db
            require_once('includes/db_vars.php');
            $pdo = new PDO('mysql:host='.HOST.'; dbname='.DB, USER, PASS);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Build and execute query
            $query = $pdo->prepare('INSERT INTO '
                                   .'newsletter '
                                   .'(join_date, email) '
                                   .'VALUES '
                                   .'(now(), :email)');

            $query->execute(array('email' => $email));

            // Nullify PDO
            $pdo = null;

            // Redirect
            header('Location: newsletter-thanks');

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

    } else {

        // Keep them on same page
        header('Location: ' . $_SERVER['HTTP_REFERER']);

    }

} else {

    // Keep them on same page
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}
?>
