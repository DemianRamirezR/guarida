<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$db = "guarida";

$conn = new mysqli("localhost", "root", "", "guarida");

if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->$connect_error);
}
?>