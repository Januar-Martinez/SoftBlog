<?php
    include '../otros/conexionBD.php';
    include '../otros/encabezado.php';

    $sql="
    select * from pregunta order by idPregunta desc;
    ";

    $datos = $conexion ->query($sql);
    echo"
    <center>
        <h1 style='padding: 30px;'>Todas Las Preguntas</h1>
    </center>
    ";
    $i=1;
    while($fila = $datos->fetch_array()):
        echo"
        <center>
            <p><b>$i)</b> $fila[pregunta]</p>
            <div id='preguntas'>
                <form action='responder.php' method='post'>
                    <input type ='hidden' name='txtIdPregunta' value = $fila[idPregunta]>
                    <button id='boton' type='submit'>Responder</button>
                </form>
                <form action='verRespuestas.php' method='post'>
                    <input type ='hidden' name='txtIdPregunta' value = $fila[idPregunta]>
                    <button id='boton' type='submit'>Ver Respuestas</button>
                </form>
            </div>
        </center>
        ";
        $i++;
    endwhile;

    include '../otros/piePagina.php';
?>