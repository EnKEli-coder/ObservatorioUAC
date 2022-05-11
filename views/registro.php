<?php
    require_once './model/conexion.php';

    $message = '';

    if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['name'])) {
        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name',$_POST['name']);
        $stmt->bindParam(':email',$_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password',$password);

        if($stmt->execute()){
            $message = 'Succesfully created new user';
        }else{
            $message = "Sorry there must be an issue";
        }
    }

?>
<link rel="stylesheet" href="styles/registro.css">
<?php
    if(!empty($message)):
?>
    <p><?= $message ?></p>
<?php
    endif;
?>

<div class="register-form">
    <h2>Registra tu cuenta</h2>
    <form action="?menu=register" method='post'>
        <input type="text" name ="name" title="nombre" placeholder="Nombre" />
        <input type="text" name="email" title="email" placeholder="Correo" />
        <input type="password" name="password" title="username" placeholder="Contraseña" />
        <button type="submit" class="btn">Registrarse</button>
    </form>
    </div><!--end log form -->   