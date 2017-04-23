<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "hello@nickgmail.com";
$subject = "Hey Nick!";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Whoops! Something went wrong. Please try again!");
echo "Thanks! I'll be in touch soon.";
?>
