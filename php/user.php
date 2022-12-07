<?php
session_start();

$nombre = $_SESSION['nombre'];
$email = $_SESSION['email'];

if (!isset($email)) {
    echo '
    <script>
        alert("Por favor inicia sesion primero!");
        window.location = "../forms/login.php";
    </script>
    ';
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../image/favicon.jpg">
    
    <link rel="stylesheet" href="libraries/swiper-bundle.min.css" />
    
    <!-- font awesome cdn link  -->
    <script src="../libraries/f42030a039.js"></script>
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/user.css">
</head>

<body>
    <div class="container">
        <div class="profile-box">
            <h3>Mis Datos:</h3>
            <img src="../image/usuario.png" class="profile-pic">
            <h3><?php echo $nombre; ?></h3>
            <p><?php echo $email; ?></p>

            <a href="cerrarSesion.php" class="btn">Cerrar Sesion</a>
            <a href="../Index.php" class="btn">Volver a Inicio</a>
        </div>
    </div>
</body>

</html>