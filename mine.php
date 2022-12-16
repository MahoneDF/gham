<?php
$lastname = $_POST["lname"];
$name = $_POST["fname"];
$mail = $_POST["email"];
$me = $_POST["message"];
$l = glob("m/*");
$t = count($l);
$t = $t + 1;
$file = fopen("m/$t.txt", "w");
echo fwrite($file, "$name \n$lastname \n$mail \n$me");
fclose($file);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
