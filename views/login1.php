<?php
$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
    session_start();
}

if (isset($_SESSION['loggedUserName'])) {
?>
    <h1>No tiene permisos para entrar a la página <h1>
<?php    
}else {    
?>

<link rel="stylesheet" href="styles/login1.css">
<div class="log-form">
  <h2>Iniciar Sesion</h2>
  <form action="./controller/login.php" method="post">
    <input type="text" title="correo" id="email" placeholder="Correo" />
    <input type="password" title="username" id="password" placeholder="Contraseña" />
    <button type="submit" class="btn">Ingresar</button>
    <a class="forgot" href="#">Olvido su usuario/Contraseña?</a>
  </form>
</div>
<?php
}
?>