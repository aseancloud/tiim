<?php
// --- CONFIG PARAMETERS --- //
//
   $email_recipient = "sudtho@iself.biz";
   $email_sender = "Sender Name";
   $email_return_to = "sender@demo.com";
   $email_content_type = "text/html; charset=us-ascii";
   $email_client = "PHP/" . phpversion();
//
// ------------------------- //

// --- DEFINE HEADERS --- //
//
   $email_header = "From: " . $email_sender . "\r\n";
   $email_header .= "Reply-To: " . $email_return_to . "\r\n";
   $email_header .= "Return-Path: " . $email_return_to . "\r\n";
   $email_header .= "Content-type: " . $email_content_type . "\r\n";
   $email_header .= "X-Mailer: " . $email_client . "\r\n";
//
// ---------------------- //

// --- SUBJECT AND CONTENTS --- //
//
   $email_subject = "Test email subject";
   $email_contents = "<html>";
   $email_contents .= "<h2>Test Email</h2>";
   $email_contents .= "<br><b>Sender: " . $email_sender;
   $email_contents .= "<br><b>Recipient: " . $email_recipient;
   $email_contents .= "</html>";
//
// ---------------------------- //

$email_result = mail($email_recipient, $email_subject, $email_contents, $email_header);
if ($email_result) echo "Email has been sent!";
else echo "Email has failed!";
?>
<!--
?php
$email_address_to = "recipient@demo.com";
$subject = "Test email subject";
$message_contents = "Hi! This is the content of the test message.";
$header = "From: sender@demo.com\r\n";
$header .= "Reply-To: sender@demo.com\r\n";
$header .= "Return-Path: sender@demo.com\r\n";
mail($email_address_to,$subject,$message_contents,$header);
?
-->

