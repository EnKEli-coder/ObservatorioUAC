<?php
    //Conexión a la base de datos
    $mysqli = new mysqli("localhost", "root", "", "observatorio");

    if(mysqli_connect_errno()) {
        echo 'Conexión fallida : ', mysqli_connect_errno();
        exit();
    }
?>