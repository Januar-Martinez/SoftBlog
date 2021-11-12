<?php
    include '../otros/conexionBD.php';
    include '../otros/encabezado.php';

    echo 
    "
    <center>
    <form action='../otros/nuevaPregunta.php' method='POST'>
        <textarea name='txtpregunta' id='txtpregunta' placeholder='Ingrese su Pregunta' autofocus required></textarea>
        <button type='submit'>Hacer Pregunta</button>
    </form>
    </center>
    ";

    include '../otros/piePagina.php';
?>