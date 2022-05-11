<?php 
    class Modelo_Grafico{
        private $conexion;
            function __construct(){
                require_once('conexion.php');
                $this->conexion =  new conexion();
                $this->conexion->conectar();
            }

            function TraerDatosGraficoBar(){
                $sql = "Select * from consumoAgua ";
                $arreglo = array();
                if ($consulta = $this->conexion->conexion->query($sql)){
                    
                    while($consulta_VU = mysqli_fetch_array($consulta)){
                        $arreglo[] = $consulta_VU;
                    
                    }
                    $this->conexion->cerrar();
                    return $arreglo;
                   
                }
            }
            function TraerDatosGraficoMen(){
                $sql = "Select * from consumoMensual ";
                $arreglo = array();
                if ($consulta = $this->conexion->conexion->query($sql)){
                    
                    while($consulta_VU = mysqli_fetch_array($consulta)){
                        $arreglo[] = $consulta_VU;
                    
                    }
                    $this->conexion->cerrar();
                    return $arreglo;
                    
                }
            }
    }

    
?>