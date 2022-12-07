<?php
session_start();
include 'connect.php';

$nombre = $_POST['nombre']; 
$email = $_POST['email'];
$pass = $_POST['pass'];

$log = mysqli_query($conn, "SELECT * FROM usuarios WHERE nombre = '$nombre' || email='$email' || pass='$pass'");

if (mysqli_num_rows($log) > 0) {
    $_SESSION['nombre'] = $nombre;
    $_SESSION['email'] = $email;
    $_SESSION['pass'] = $pass;
    header("location: ../Index.php");
    exit();
}else{
    echo '
    <script>
        alert("Datos inexistentes. Verifiquelos por favor.");
        window.location = "../forms/register.php";
    </script>
    ';
    exit();
}
?>