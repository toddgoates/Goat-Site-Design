<?php
    define('KEY', true);

    if(isset($_POST['submit'])) {
    	$email = $_POST['email'];

        if(!empty($email) && $email != '') {
            try {
                require_once('includes/db_vars.php');
                $pdo = new PDO('mysql:host='.HOST.'; dbname='.DB, USER, PASS);
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $query = $pdo->prepare('INSERT INTO '
                                       .'newsletter '
                                       .'(join_date, email) '
                                       .'VALUES '
                                       .'(now(), :email)');

                $query->execute(array('email' => $email));

                $pdo = null;

                header('Location: newsletter-thanks');
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        } else {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>
