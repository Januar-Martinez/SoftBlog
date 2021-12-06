<?php
    include '../otros/conexionBD.php';
    include '../otros/encabezado.php';

    $sql= "select pregunta from pregunta where idPregunta = $_REQUEST[txtIdPregunta];";
    $datos2 = $conexion ->query($sql) or die("error interno");
    $fila2 = $datos2->fetch_array();
    $pregunta= $fila2[0];

    echo 
    "
    <center>
    <h1 style='padding: 25px'>Pregunta: $pregunta</h1>
    <h3>Respuestas</h3>
    </center>
    ";

    $sqlR= "select respuesta from respuesta where idPregunta= $_REQUEST[txtIdPregunta];;";

    $datos = $conexion ->query($sqlR);

    $i=1;

    while($fila = $datos->fetch_array()):
        echo"
        <div>
            <p style='padding: 10px'>$i) $fila[respuesta]</p>
        </div>
        ";
        $i++;
    endwhile;

    include '../otros/piePagina.php';
?>