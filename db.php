<?php
$conn = new mysqli('localhost', 'root', '', 'blogdossantos');
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>
