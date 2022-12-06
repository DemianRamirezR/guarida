<?php
    //Cadena de conexion obteniendo valores
    $servidor="mysql:bdname=".BD.";host=".SERVIDOR;

    try{

        $pdo = new PDO( $servidor,USUARIO,PASS,
            array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
            );

        echo "<script> console.log('Se ha conectado al servidor 👌.') </script>";

    }catch (PDOException $e) {

        echo "<script> alert('Error de conexion al servidor 😖.') </script>";
        
    }

?>