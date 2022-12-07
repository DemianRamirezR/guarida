<?php

include 'php/connect.php';

$result = mysqli_query($conn, "SELECT * FROM carrito");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Carrito</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="image/favicon.jpg">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/carrito-table.css">
    <!-- font awesome cdn link  -->
    <script src="libraries/f42030a039.js"></script>
</head>
<body>

    <!-- header section starts -->
    
    <header class="header" id="home">
    
        <div class="header-1">
    
            <a href="Index.php" class="logo"> <i class="fas fa-book"></i> La Guarida Freaky </a>
    
            <div class="icons">
                <a href="carrito.php" class="fas fa-shopping-cart"></a>
                <a href="forms/login.php" id="login-btn" class="fas fa-user"></a>
                <a href="php/user.php" id="login-btn" class="fa-solid fa-right-to-bracket"></a>
            </div>
    
        </div>
    
        <div class="header-2">
            <nav class="navbar">
                <a href="Index.php#home">Inicio</a>
                <a href="Index.php#featured">Destacados</a>
                <a href="productos.php">Historietas</a>
            </nav>
        </div>
    
    </header>
    
    <!-- header section ends -->

    <div class="tableContainer">
        <h1 class="heading"> <span>Mi carrito de compras</span> </h1>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Imagen</th>
                <th>Titulo</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
            <?php
            while ($res = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $res['id'] . "</td>";
                echo "<td><img width='80px' src='" . $res['imagen'] . "'></td>";
                echo "<td>" . $res['titulo'] . "</td>";
                echo "<td>" . $res['precio'] . "</td>";
                echo "<td><input type='number' value='" . $res['cantidad'] . "'></td>";
                echo "<td>
                        <a type='submit' name='update' class='btn' href=\"php/edit.php?id=$res[id]\">Editar</a> | <a class='btn' href=\"php/delete.php?id=$res[id]\" onClick=\"return confirm('Segur@ que desea eliminarlo?')\">Borrar</a>
                     </td>";
                echo "</tr>";
            }
            ?>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="php/vaciarCarrito.php" class="btn">Vaciar mi Carrito.</a></td>
            <td><a href="">Realizar Compra</a></td>
            
        </table>
    </div>
</body>
</html>