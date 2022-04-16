<?php
$name = $_POST['name'];
$email = $_POST['emailaddress'];
$message = $_POST['message'];

$to="reddyrenuka2475@gmail.com";

$subject="Mail From Renuka";

$txt = "Name =".$name . "\r\n Email= " . $email . "\r\n Message=" . $message ;

$headers = "From: noreply@codeconia.com" . "\r\n"."CC: ......";

if(#email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>

