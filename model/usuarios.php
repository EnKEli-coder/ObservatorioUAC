<?php


class usuarios{
    public static function login($_email, $_password) {
        include_once 'conexion.php';
        $query = $mysqli->prepare("SELECT id, user, email, pswd, FROM user WHERE email = ? and pswd = ?");
        $query->bind_param("ss",$_email,$_password); 
        $query->execute();
        $usuario = $query->get_result();

        while ($filasql = $usuario->fetch_array(MYSQLI_BOTH)) {
            
            // initialize session variables
            session_start();
           // $_SESSION['loggedDataTime']   = datatime();
            $_SESSION['loggedUserName'] = $filasql['id'] ;
        }

        $acceso = false;
        if ($usuario->num_rows > 0) {
            $acceso = true;
        }


        $mysqli->close();
        return $acceso;
    }


}

?>

