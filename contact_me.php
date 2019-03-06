<?php

// Check for empty fields

if(empty($_POST['name'])      ||

   empty($_POST['email'])     ||

   empty($_POST['message'])   ||

   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))

{

   echo "No arguments Provided!";

   return false;

}

   

$name = strip_tags(htmlspecialchars($_POST['name']));

$email_address = strip_tags(htmlspecialchars($_POST['email']));

$message = strip_tags(htmlspecialchars($_POST['message']));

   

// Create the email and send the message

$to = "shawnchen23@gmail.com"; 

$email_subject = "New Form submission";

    

$email_body = "User Name: $name.\n".
    "User Email: $email_address.\n".
    "User Message: $message.\n";

$headers = "From: noreply@Samburian.com\n"; 

$headers .= "Reply-To: $email_address";   



$result = mail($to,$email_subject,$email_body,$headers);

die($result);         

?>