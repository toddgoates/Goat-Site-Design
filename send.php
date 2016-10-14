<?php
    define('KEY', true);

    if(isset($_POST['submit'])) {

        require_once('includes/credentials.php');
        require('vendor/google/recaptcha/src/autoload.php');
        $recaptcha = new \ReCaptcha\ReCaptcha(GRC_SECRET);
        $res = $recaptcha->verify($_POST['g-recaptcha-response']);

        if($res->isSuccess()) {

            $fullname = $_POST['fullname'];
            $email    = $_POST['email'];
            $phone    = $_POST['phone'];
            $reason   = $_POST['reason'];

            if(isset($_POST['message'])) { $message = $_POST['message']; }
            if(isset($_POST['help'])) { $help = $_POST['help']; }
            if(isset($_POST['budget'])) { $budget = $_POST['budget']; }
            if(isset($_POST['timeline'])) { $timeline = $_POST['timeline']; }
            if(isset($_POST['details'])) { $details = $_POST['details']; }

            if($reason != 'I have a project for you') {
                $help     = '';
                $budget   = '';
                $timeline = '';
                $details  = '';
            }

            try {
                $pdo = new PDO('mysql:host='.HOST.'; dbname='.DB, USER, PASS);
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $query = $pdo->prepare('INSERT INTO '
                    .'contact '
                    .'(ts_created, fullname, email, phone, reason, '
                    .'message, help, budget, timeline, details) '
                    .'VALUES '
                    .'(now(), :fullname, :email, :phone, :reason, '
                    .':message, :help, :budget, :timeline, :details)');

                $query->execute(array(
                    'fullname'  => $fullname,
                    'email'     => $email,
                    'phone'     => $phone,
                    'reason'    => $reason,
                    'message'   => $message,
                    'help'      => $help,
                    'budget'    => $budget,
                    'timeline'  => $timeline,
                    'details'   => $details
                ));

                $pdo = null;

                $params = compact(
                    'fullname',
                    'email',
                    'phone',
                    'reason',
                    'message',
                    'help',
                    'budget',
                    'timeline',
                    'details'
                );
                include('includes/email_functions.php');
                sendContactEmail($params);
                header('Location: contact-thanks');
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        } else {
            header('Location: contact?grc=failed');
            exit;
        }


    } else {
        header('Location: contact.php');
    }
?>
