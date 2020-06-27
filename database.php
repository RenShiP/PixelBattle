<?php

$mysqli = new mysqli ("localhost", "root", "", "threads");
$mysqli->query("SET NAMES 'utf8'");

for ($i = 1; $i <= 4000; $i++) {

$mysqli->query("INSERT INTO `threads`.`colors` (`Number`, `Color`) VALUES (NULL, '000');");

}

$mysqli->close();

?>