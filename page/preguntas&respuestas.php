<?php
    include '../otros/conexionBD.php';
    include '../otros/encabezado.php';

    $sql="
    select p.idPregunta, p.pregunta, r.idRespuesta, r.respuesta
    from respuesta as r join pregunta as p
    on p.idPregunta = r.idPregunta
    order by p.idPregunta desc;
    ";

    $datos = $conexion ->query($sql);

    $respuesta_anterior="";
    
    while($fila = $datos->fetch_array()):
        echo"
        <center>
            <h1>$fila[pregunta]</h1>";
            if($respuesta_anterior!=$fila['respuesta']):
                echo"
                <p>$fila[respuesta]</p>";
            else:
                echo"
                <h1>fin de pregunta</h1>";
            endif;
            echo"
        </center>
        ";
        $respuesta_anterior=$fila['respuesta'];
    endwhile;


    include '../otros/piePagina.php';
?>