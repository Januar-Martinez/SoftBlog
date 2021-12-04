<?php
    include '../otros/conexionBD.php';
    include '../otros/encabezado.php';

    $sqlmax= "select MAX(pregunta) FROM pregunta;";
    $datos = $conexion ->query($sqlmax) or die("error interno");
    $fila = $datos->fetch_array();
    $ultimaPregunta= $fila[0];

    echo
    "
        <div'>
            <center>
                <a href='preguntas&respuestas.php'><img id='imagen' src='../img/info.jpeg' alt=''></a>
                <h1 style='padding: 10px'>Ultima Pregunta</h1>
            </center>
        <div>
        <center>
        <div>
            <textarea name='txtpregunta' id='txtpregunta' autofocus readonly required>$ultimaPregunta</textarea>
        </div>
        <div class='boton-modal'>
        <label for='btn-modal'>
            Ver Pregunta
        </label>
        </div>
        </center>
        <input type='checkbox' id='btn-modal'>
        <div class='container-modal'>
            <div class='content-modal'>
                <h2>Pregunta</h2>
                <p>$ultimaPregunta</p>
                <form action='../otros/ultimaRespuesta.php' method='POST'>
                    <div>
                        <textarea name='txtrespuesta' id='txtrespuesta' placeholder='Ingrese su Respuesta' required></textarea>
                    </div>
                    <div>
                        <button type='submit'>Responder</button>
                    </div>
                </form>
                <div class='btn-cerrar'>
                    <label for='btn-modal'>Cerrar</label>
                </div>
            </div>
            <label for='btn-modal' class='cerrar-modal'></label>
        </div>
    ";

    include '../otros/piePagina.php';
?>