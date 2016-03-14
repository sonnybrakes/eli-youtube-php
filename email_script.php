<?php

$from="test@elithecomputerguy.com";
$name = $_POST['name'];
$email = $_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$data = $name . "," . $email;
$file = "file.csv";

mail($email, $subject, $message, "From:".$from);

file_put_contents($file, $data . PHP_EOL, FILE_APPEND);

print "Thank you for submitting your email address!";
print "<p>Your message has been sent: <br>$email<br>$subject<br>$message</p>";

?>
