<?php
$host = 'localhost';
$database = 'a0616686_oper';
$user = 'a0616686_oper';
$password = 'root';
//require_once 'connect.php';
$link = mysqli_connect($host, $user, $password, $database)
or die("ошибка" . mysqli_error($link));
?>
