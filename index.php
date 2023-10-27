<?php
session_start();
$ip = getenv("REMOTE_ADDR");

header("Location: ----+_--.htm?ip=$ip");
?>