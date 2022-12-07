<?php
//including the database connection file
include("connect.php");

//getting id of the data from url
$id = $_GET['id'];


$result = mysqli_query($conn, "DELETE FROM carrito WHERE id=$id");


header("Location: ../carrito.php");
?>

