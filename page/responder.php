<?php
    include '../otros/conexionBD.php';
    include '../otros/encabezado.php';

    $sql= "select pregunta from pregunta where idPregunta = $_REQUEST[txtIdPregunta];";
    $datos = $conexion ->query($sql) or die("error interno");
    $fila = $datos->fetch_array();
    $pregunta= $fila[0];

    echo 
    "
    <center>
    <h9>La pregunta es: $pregunta</h9>
    <form action='../otros/nuevaRespuesta.php' method='POST' style='margin-top:55px;'>
        <div>
            <textarea name='txtRespuesta' id='txtRespuesta' placeholder='¿Tienes La Solución A Esta Consulta?' autofocus required></textarea>
        </div>
        <input type ='hidden' name='txtIdPregunta' value = $_REQUEST[txtIdPregunta]>
        <div>
            <button id='boton' type='submit'>Hacer Respuesta</button>
        </div>
    </form>
    </center>
    ";


    include '../otros/piePagina.php';
?>