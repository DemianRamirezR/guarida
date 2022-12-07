<?php
    session_start();
    include 'connect.php';
    //Eliminar todo del carrito:
    $vaciar = mysqli_query($conn, "TRUNCATE TABLE carrito");

    if ($vaciar === TRUE) {
        echo '
    <script>
        alert("Datos Eliminados Satisfactoriamente..");
        window.location = "../carrito.php";
    </script>
    ';
    }
?>