<?php
session_start();

include 'connect.php';

$imagen = $_POST["imagen"];
$titulo = $_POST["titulo"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];

$sql = "INSERT INTO carrito (imagen, titulo, precio, cantidad) 
VALUES ('{$imagen}', '{$titulo}', '{$precio}', '{$cantidad}')";


if ($conn->query($sql) === TRUE) {
    echo '
    <script>
        alert("Historieta añadida al carrito!.");
        window.location = "../Index.php";
    </script>
    ';
    exit();
} else {
    echo '
    <script>
        alert("Error, La Historieta no se agrego al carrito.");
        window.location = "../Index.php";
    </script>
    ';
}

mysqli_close($conn);

?>