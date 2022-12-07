

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <!-- Font Awesome -->
    <script src="./libraries/f42030a039.js"></script>

    <!-- CSS custom -->
    <link rel="stylesheet" href="../css/form-style.css">
</head>
<body>

    <div class="form-container">

        <form action="" method="$_POST">
            <h3>Regístro</h3>

            <input type="text" name="nombre" placeholder="Escríbe tu nombre aquí" required class="box">
            <input type="email" name="email" placeholder="Escríbe tu email aquí" required class="box">
            <input type="password" name="pass" placeholder="Escríbe tu contraseña aquí" required class="box">
            <input type="password" name="cpass" placeholder="Confirma tu contraseña aquí" required class="box">
            <input type="text" name="celular" placeholder="Escríbe tu numero celular aquí" required class="box">
            <input type="text" name="direccion" placeholder="Escríbe tu direccion aquí" required class="box">

            <input type="submit" name="submit" value="Registrarme." class="btn">
            <p>Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a><br><br>
            <a href="../Index.php">Volver a Inicio</a></p>
        </form>

    </div>

</body>
</html>