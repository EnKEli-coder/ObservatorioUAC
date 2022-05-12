<?php
    require_once './model/conexion.php';

    $message = '';

    if(!empty($_POST['facultad']) && !empty($_POST['consumo'])) {
        $sql = "INSERT INTO consumoagua (facultad, consumo) VALUES (:facultad, :consumo)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':facultad',$_POST['facultad']);
        $stmt->bindParam(':consumo',$_POST['consumo']);

        if($stmt->execute()){
            $message = 'Succesfully created new user';
        }else{
            $message = "Sorry there must be an issue";
        }
    }

    if(!empty($_POST['facultadM']) && !empty($_POST['consumoEne'])) {
        $sql = "INSERT INTO consumomensual (facultad, enero, febrero, marzo, abril, mayo, junio, julio, agosto, septiembre, octubre, noviembre, diciembre)
         VALUES (:facultadM, :consumoEne, :consumoFeb, :consumoMar, :consumoAbr, :consumoMay, :consumoJun, :consumoJul, :consumoAgo, :consumoSep, :consumoOct, :consumoNov, :consumoDic)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':facultadM',$_POST['facultadM']);
        $stmt->bindParam(':consumoEne',$_POST['consumoEne']);
        $stmt->bindParam(':consumoFeb',$_POST['consumoFeb']);
        $stmt->bindParam(':consumoMar',$_POST['consumoMar']);
        $stmt->bindParam(':consumoAbr',$_POST['consumoAbr']);
        $stmt->bindParam(':consumoMay',$_POST['consumoMay']);
        $stmt->bindParam(':consumoJun',$_POST['consumoJun']);
        $stmt->bindParam(':consumoJul',$_POST['consumoJul']);
        $stmt->bindParam(':consumoAgo',$_POST['consumoAgo']);
        $stmt->bindParam(':consumoSep',$_POST['consumoSep']);
        $stmt->bindParam(':consumoOct',$_POST['consumoOct']);
        $stmt->bindParam(':consumoNov',$_POST['consumoNov']);
        $stmt->bindParam(':consumoDic',$_POST['consumoDic']);


        if($stmt->execute()){
            $message = 'Succesfully created new user';
        }else{
            $message = "Sorry there must be an issue";
        }
    }

?>
<link rel="stylesheet" type="text/css" href="./styles/administrador.css"/>
<div>
    <div class=""container-add>
        <h2 class="container__title">Registrar Entrada de consumo de agua general</h2>
            <form action="?menu=administrator" method="post" class="container__form">
                <label form="" class="container__label">Facultad:</label>
                <input name="facultad" type="text" class="container__input"></input>
                <label form="" class="container__label">Consumo de piedra osiosi:</label>
                <input name="consumo" type="number" class="container__input"></input>
                <input class="container__submit" type="submit" value="Registrar">
            </div>


    </div>
    <div>
    <div class=""container-add>
        <h2 class="container__title">Registrar Entrada mensual</h2>
        <form action="?menu=administrator" method="post" class="container__form">
                <label for="" class="container__label">Facultad:</label>
                <input name="facultadM" type="text" class="container__input"></input>
                <label for="" class="container__label">Consumo del mes de enero:</label>
                <input name="consumoEne" type="number" class="container__input"></input>
                <label for="" class="container__label">Consumo del mes de Febrero:</label>
                <input name="consumoFeb" type="number" class="container__input"></input>
                <label for="" class="container__label">Consumo del mes de marzo:</label>
                <input name="consumoMar" type="number" class="container__input"></input>
                <label for="" class="container__label">Consumo del mes de Abril:</label>
                <input name="consumoAbr" type="number" class="container__input"></input>
                <label for="" class="container__label">Consumo del mes de Mayo:</label>
                <input name="consumoMay" type="number" class="container__input"></input>
                <label for="" class="container__label">Consumo del mes de Junio:</label>
                <input name="consumoJun" type="number" class="container__input"></input>
                <label for="" class="container__label">Consumo del mes de Julio:</label>
                <input name="consumoJul" type="number" class="container__input"></input>
                <label for="" class="container__label">Consumo del mes de Agosto:</label>
                <input name="consumoAgo" type="number" class="container__input"></input>
                <label for="" class="container__label">Consumo del mes de septiembre:</label>
                <input name="consumoSep" type="number" class="container__input"></input>
                <label for="" class="container__label">Consumo del mes de Octubre:</label>
                <input name="consumoOct" type="number" class="container__input"></input>
                <label for="" class="container__label">Consumo del mes de noviembre:</label>
                <input name="consumoNov" type="number" class="container__input"></input>
                <label for="" class="container__label">Consumo del mes de Diciembre:</label>
                <input name="consumoDic" type="number" class="container__input"></input>
                <input class="container__submit" type="submit" value="Registrar">
            </div>


    </div>
</div>