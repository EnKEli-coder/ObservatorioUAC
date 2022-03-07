<?php
    if (filter_input_array(INPUT_POST)) {
        $_email = trim(filter_input(INPUT_POST, 'email'));
        $_pswd = trim(filter_input(INPUT_POST, 'password'));
        include_once '../model/usuarios.php';
        $loginok = usuarios::login($_email, $_pswd);
        print_r($loginok);
        if ($loginok){
        header("location: ../index.php?menu=administrator");
        } else{
            echo "<script>
            alert('Usuario No Existe o Password Incorrecto');
            window.location= '../index.php?menu=mapa'
            </script>";
        }
        }
?>

