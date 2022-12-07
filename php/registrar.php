<?php
include 'connect.php';

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$celular = $_POST["celular"];
$direccion = $_POST["direccion"];

$sql = "INSERT INTO usuarios (nombre,email,pass,celular,direccion) VALUES ('{$nombre}','{$email}','{$pass}','{$celular}','{$direccion}')";

//Verificamos Email en la BD
$verificarEmail = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email'");

if (mysqli_num_rows($verificarEmail) > 0) {
    echo '
    <script>
        alert("Correo Electronico ya registrado!");
        window.location = "../Index.php";
    </script>
    ';

    exit();
}

//Verificamos Celular en la BD
$verificarCel = mysqli_query($conn, "SELECT * FROM usuarios WHERE celular = '$celular'");

if (mysqli_num_rows($verificarCel) > 0) {
    echo '
    <script>
        alert("Numero Celular ya registrado!");
        window.location = "../Index.php";
    </script>
    ';

    exit();
}

if ($conn->query($sql) === TRUE) {
    echo '
    <script>
        alert("Usuario registrado con exito!.");
        window.location = "../forms/login.php";
    </script>
    ';
} else {
    echo '
    <script>
        alert("Error, Usuario no registrado.");
        window.location = "../Index.php";
    </script>
    ';
}

mysqli_close($conn);
?>