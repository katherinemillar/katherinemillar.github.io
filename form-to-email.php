<?php
if(lisset($_POST['submit']))
{
        echno "error; you need to submit the form!"
}
$fname = $_POST['name'];
$visitor_email=$_POST['email'];
$comments = $_POST['comments'];

if(empty($fname)||empty($visitor_email))
{
    echo "Name and Email are Required!";
    exit;
}

$email_from = 'chloe@cocoillustrations.com';
$email_subject = "New Form Submission";
$email_body = "You have recieved a new message from the user $fname.\n".
    "email address: $visitor_email\n".
    "Here is the message: \n $message"<div class=".

    $to = 'chloe@cocoillustrations.com';
    $headers = "From $email_from \r\n";

    mail($to,$email_subject,$email_body,$headers);


  