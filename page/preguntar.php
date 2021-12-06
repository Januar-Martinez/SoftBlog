<?php
    include '../otros/conexionBD.php';
    include '../otros/encabezado.php';
    
    echo 
    "
    <center>
    <form action='../otros/nuevaPregunta.php' method='POST'>
        <div>
            <textarea name='txtpregunta' id='txtpregunta' placeholder='Ingrese su Pregunta' autofocus required></textarea>
        </div>
        <div>
            <button id='boton' type='submit'>Hacer Pregunta</button>
        </div>
    </form>
    </center>
    ";



    include '../otros/piePagina.php';
?>