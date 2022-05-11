<?php
    class conexion{
        private $servidor;
        private $username;
        private $password;
        private $database;
        public $conexion;

        public function _construct(){
            $this->servidor ='localhost';
            $this->username ='root';
            $this->password ='';
            $this->database = 'observatorio';

        }
        function conectar(){
            
                $this->conexion =  new mysqli($this->servidor,$this->username,$this->password,'observatorio');
          
        } 
        
        function cerrar(){
            $this->conexion->close();
        }
        }
        
    /*Conexión a la base de datos
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'observatorio';

    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);

    }catch (PDOException $e){
        die('Connected failed; '.$e->getMesssage());
    }*/
?>