<?php
// conexion

ini_set('display_errors', 1);

$host = "";
$user = "";
$pass = "";
$db = "";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_errno){
  echo "Erro na conexão <br>";
  echo "Erro" . $conn->connect_error;
}