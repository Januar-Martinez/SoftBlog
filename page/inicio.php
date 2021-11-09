<?php
    include '../otros/conexionBD.php';
    include '../otros/encabezado.php';

    echo
    "
        <center>
        <form>
            <textarea name='txtpregunta' id='' autofocus readonly required>tengo un área de texto y quiero que esté justificado para que todas las líneas tengan el mismo ancho y que estén centradas en el texto se quedan en el medio del área de texto cuando no tiene la longitud máxima de línea.</textarea>
        </form>
        </center>
    ";



    include '../otros/piePagina.php';
?>