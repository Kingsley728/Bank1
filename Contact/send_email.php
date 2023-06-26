<?php
if ($_POST["submit"]) {
    $name = $_POST["Name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $mailTo = "donkingsley96@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message: " . $message;

    $result = mail($mailTo, $subject, $body);

    //error checking

    if($result) {

    Ssuccess "The message was sent successfully!";
    }else{
    $failed "Error: Message was not sent, Try again later";
    }

  
}
?>
