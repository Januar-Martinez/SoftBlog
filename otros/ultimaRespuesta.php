<?php
    include 'conexionBD.php';

    $sqlmax= "select MAX(idPregunta) FROM pregunta;";

    $datos = $conexion ->query($sqlmax) or die("error interno");

    $fila = $datos->fetch_array();

    $IDPregunta= $fila[0];

    $sqlmax2= "select MAX(idRespuesta) FROM respuesta;";

    $datos2 = $conexion ->query($sqlmax2) or die("error interno");

    $fila2 = $datos2->fetch_array();

    $IDRespuesta= $fila2[0] + 1;

    $datos = $conexion->prepare("insert into respuesta values (?,?,?);");
    $datos->bind_param('iis',$IDPregunta,$IDRespuesta,$_REQUEST['txtrespuesta']);
    $datos->execute() or die('error interno #2');

    echo "
    <div class='alert alert-success' role='alert' style='margin-top:55px;'>
        Respuesta Formulada Correctamente 
        <a href='../page/inicio.php'>Inicio</a>
    </div>"; 

?>