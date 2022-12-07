<?php
session_start();
echo '
    <script>
        alert("Cerrando sesion ! ! !");
    </script>
    ';

session_destroy();
header('location: ../Index.php');
?>