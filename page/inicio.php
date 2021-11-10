<?php
    include '../otros/conexionBD.php';
    include '../otros/encabezado.php';

    echo
    "
        <center>
        <div>
            <textarea name='txtpregunta' id='' autofocus readonly required>La propiedad CSS padding establece el espacio de relleno requerido por todos los lados de un elemento. El área de padding es el espacio entre el contenido del elemento y su borde (border). No se permiten valores negativos.</textarea>
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
                <p>La propiedad CSS padding establece el espacio de relleno requerido por todos los lados de un elemento. El área de padding es el espacio entre el contenido del elemento y su borde (border). No se permiten valores negativos.</p>
                <div class='btn-cerrar'>
                    <label for='btn-modal'>Cerrar</label>
                </div>
            </div>
            <label for='btn-modal' class='cerrar-modal'></label>
        </div>
    ";



    include '../otros/piePagina.php';
?>