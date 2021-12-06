<?php
    include 'conexionBD.php';

    $sqlmax= "select MAX(idRespuesta) FROM respuesta;";

    $datos = $conexion ->query($sqlmax) or die("error interno");

    $fila = $datos->fetch_array();

    $ID= $fila[0] + 1;

    $datos = $conexion->prepare("insert into respuesta values (?,?,?);");
    $datos->bind_param('iis',$_REQUEST['txtIdPregunta'],$ID,$_REQUEST['txtRespuesta']);
    $datos->execute() or die('error interno #2');

    echo "
    <div class='alert alert-success' role='alert' style='margin-top:55px;'>
        Respuesta Formulada Correctamente 
        <a href='../page/preguntas.php'>Inicio</a>
    </div>"; 
?>