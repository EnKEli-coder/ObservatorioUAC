<?php

require_once './model/conexion.php';

if(!empty($_POST['email']) && !empty($_POST['password'])){
  $records = $conn->prepare('SELECT id, email, password FROM users WHERE email=:email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if(count($results)>0 && password_verify($_POST['password'],$results['password'])){
    $_SESSION['user_id'] = $results['id'];
    header('Location: ?menu=mapa');
  }else{
    $message ='Sorry, wrong credentials';
  }
}
$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
    session_start();
}

?>

<link rel="stylesheet" href="styles/login1.css">

<?php
    if(!empty($message)):
?>
    <p><?= $message ?></p>
<?php
    endif;
?>

<div class="log-form">
  <h2>Iniciar Sesion</h2>
  <form action="?menu=login" method="post">
    <input type="text" name="email" menu="email" title="correo" id="email" placeholder="Correo" />
    <input type="password" name="password" menu="password" title="username" id="password" placeholder="Contraseña" />
    <button type="submit" class="btn">Ingresar</button>
    <a class="forgot" href="#">Olvido su usuario/Contraseña?</a>
  </form>
</div>
<?php
?>