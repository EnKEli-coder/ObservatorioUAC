<?php
    //Conexión a la base de datos
    $server = 'localhost';
    $username = 'root';
    $password = 'Chocorrol2510@';
    $database = 'observatorio';

    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);

    }catch (PDOException $e){
        die('Connected failed; '.$e->getMesssage());
    }
?>