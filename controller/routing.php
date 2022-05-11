<?php
      $var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'mapa';
      echo "<br>";
      switch ($var_getMenu) {
      case "inicio":
            require_once ('./views/mapa.php');
            break;

      case "register":
            require_once('./views/registro.php');  
            break;

      case "login":
            require_once('./views/login1.php');
            break;

      case "logout":
            require_once('./views/logout.php');
            break;  

      case "consumo":
            require_once("./views/consumo.php");
            break;

      case "participacion":
            require_once("./views/participacion.php");
             break;

      case "administrator":
            require_once("./views/administrator.php");
             break;
             
      default:
      require_once('./views/mapa.php');
      }


?>