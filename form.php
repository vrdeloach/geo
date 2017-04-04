<?php
 
// Get values from form
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$experience=$_POST['experience'];
 
$to = "geojacksontn@gmail.com";
$subject = "Contact Form";
$message = " Name: " . $name . "\r\n Email: " . $email . "\r\n Message: " . $message . "\r\n Experience: " . $experience;
 
 
$from = "";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
 
if(@mail($to,$subject,$message,$headers))
{
  header('Location: messagesent.html');
}else{
  header('Location: messagefailed.html');
}

?>