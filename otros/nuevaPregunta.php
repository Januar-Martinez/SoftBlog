<?php
    include 'conexionBD.php';

    $sqlmax= "select MAX(idPregunta) FROM pregunta;";

    $datos = $conexion ->query($sqlmax) or die("error interno");

    $fila = $datos->fetch_array();

    $ID= $fila[0] + 1;

    $datos = $conexion->prepare("insert into pregunta values (?,?);");
    $datos->bind_param('is',$ID,$_REQUEST['txtpregunta']);
    $datos->execute() or die('error interno #2');

    echo "
    <div class='alert alert-success' role='alert' style='margin-top:55px;'>
        Pregunta Formulada Correctamente 
        <a href='../page/inicio.php'>Inicio</a>
    </div>"; 
?>