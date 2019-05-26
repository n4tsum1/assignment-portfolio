<?php 
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$email = $_POST["email"];
$comment = $_POST["comment"];
$formcontent="From: $fname, $lname \n Email: $email, Comment: $comment";
$recipient = "natsumi.saito@griffithuni.edu.au";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>`