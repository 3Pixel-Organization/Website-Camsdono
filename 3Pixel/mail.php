<?php
//get data from form
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];
$to = "3pixelcontactus@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: 3-Pixel.com" . "\r\n" .
    "CC: 3pixelcontactus@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:ThankYou.html");
}
//redirect
//
?>
