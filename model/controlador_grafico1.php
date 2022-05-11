<?php
    require_once 'modelo_grafico.php';

    $MG = new Modelo_Grafico();
    $consulta = $MG-> TraerDatosGraficoMen();
    echo json_encode($consulta);
?>