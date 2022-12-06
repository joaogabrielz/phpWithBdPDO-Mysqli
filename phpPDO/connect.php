<?php
// conexion

ini_set('display_errors', 1);

$host = "";
$db = "";
$user = "";
$pass = "";


$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);