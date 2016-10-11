<?php
    if(!defined('KEY')) {
        header('Location: https://toddgoates.com/404');
    }

    function sendContactEmail($params) {
        // Build Email Variables
        $to = 'todd@toddgoates.com';

        $headers   = array();
        $headers[] = "MIME-Version: 1.0";
        $headers[] = "From: Todd Goates Contact Form <noreply@toddgoates.com>";
        $headers[] = "Reply-To: Todd Goates <todd@toddgoates.com>";
        $headers[] = "Return-Path: noreply@toddgoates.com";

        $subject = "Todd Goates Contact Form Submission";

        $message = "";
        $message .= "{$params['fullname']} has sent you a message from toddgoates.com: \r\r";
        $message .= "Email:  {$params['email']} \r";
        $message .= "Phone:  {$params['phone']} \r";
        $message .= "Reason for contact:  {$params['reason']} \r";
        $message .= "Message:  {$params['message']} \r";
        $message .= "Help:  {$params['help']} \r";
        $message .= "Budget:  {$params['budget']} \r";
        $message .= "Timeline:  {$params['timeline']} \r";
        $message .= "Details:  {$params['details']} \r\r";
        $message .= "You can view the contents of this message again in the toddgoates database. \r";
        $message .= "Have a nice day!";

        // Send Email
        if(mail($to, $subject, $message, implode("\r\n", $headers))) {
          return true;
        } else {
          return false;
        }
    }
?>
