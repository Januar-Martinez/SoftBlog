<?php
    include '../otros/conexionBD.php';
    include '../otros/encabezado.php';

    $sql="
    select * from pregunta;
    ";

    $datos = $conexion ->query($sql);
    echo"
    <center>
        <h1>Todas Las Preguntas</h1>
    </center>
    ";
    while($fila = $datos->fetch_array()):
        echo"
        <div id='preguntas'>
            <p>$fila[pregunta]</p>
            <form action='responder.php' method='post'>
                <input type ='hidden' name='txtIdPregunta' value = $fila[idPregunta]>
                <button id='boton' type='submit'>Responder</button>
            </form>
            <form action='verRespuestas.php' method='post'>
                <input type ='hidden' name='txtIdPregunta' value = $fila[idPregunta]>
                <button id='boton' type='submit'>Ver Respuestas</button>
            </form>
        </div>
        ";
    endwhile;

    include '../otros/piePagina.php';
?>