<?php
    define('KEY', true);

    if(isset($_POST['submit'])) {
    	$email = $_POST['email'];

        if(!empty($email) && $email != '') {
            try {
                require_once('includes/credentials.php');
                require('vendor/autoload.php');
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

                $body = "";
                $body .= "$email has just subscribed to your newsletter! \r\r";
                $body .= "You can view the details of their subscription in the toddgoates database. \r";
                $body .= "Have a nice day!";

                $client = new \Http\Adapter\Guzzle6\Client();
                $mg = new \Mailgun\Mailgun(MAILGUN_KEY, $client);
                $domain = 'toddgoates.com';

                $mg->sendMessage($domain, array(
                    'from'    => 'noreply@toddgoates.com',
                    'to'      => 'todd@toddgoates.com',
                    'subject' => 'Todd Goates Newsletter Submission',
                    'text'    => $body
                ));

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
