<?php
    include '../otros/conexionBD.php';
    include '../otros/encabezado.php';

    echo
    "
        <center>
        <div>
            <textarea name='txtpregunta' id='txtpregunta' autofocus readonly required></textarea>
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
                <p></p>
                <div class='btn-cerrar'>
                    <label for='btn-modal'>Cerrar</label>
                </div>
            </div>
            <label for='btn-modal' class='cerrar-modal'></label>
        </div>
    ";

    include '../otros/piePagina.php';
?>