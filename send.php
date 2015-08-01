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
    
    if($reason != 'I have a project for you') {
        $help = '';
        $budget= '';
        $timeline = '';
        $details = '';
    }

    // Create PDO object
    try {
        
        require_once('includes/db_vars.php');
        $pdo = new PDO("mysql:host=$HOST; dbname=$DB", $USER, $PASS);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Build and execute query
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
        
        // Nullify PDO
        $pdo = null;
        
        // Build and send email
        $to = 'todd@toddgoates.com';
        $subject = 'toddgoates.com Contact Form Submission';
        $message = "$fullname has sent you a message from toddgoates.com:  \n\n"
            ."Email:  $email \n"
            ."Phone:  $phone \n"
            ."Reason for contact:  $reason \n"
            ."Message:  $message \n"
            ."Help:  $help \n"
            ."Budget:  $budget \n"
            ."Timeline:  $timeline \n"
            ."Details:  $details \n\n"
            ."You can view the contents of this message again in the toddgoates database. \n"
            ."Have a nice day!";
        
        //$from = 'FROM: "'.$email.'"';
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Return-Path: $email\r\n";
        
        mail($to, $subject, $message, $headers);

        // Redirect
        header('Location: contact-thanks');
        
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
} else {
    
    // Redirect
    header('Location: contact.php');
}
?>