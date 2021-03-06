<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftBlog</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/png" href="../img/favicon.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body style="background-color: #f5f3f3ee;">
<?php
//var_dump ($_SESSION);
    if(isset($_SESSION['emailUsuario'])):
        echo"
        <nav>
            <input type='checkbox' id='check'>
            <label for='check' class='checkbtn'>
                <i class='fas fa-bars'></i>
            </label>
            <a href='../page/inicio.php' class='enlace'>
                <h1>SoftBlog</h1>
            </a>
            <ul>
                <li><a class='' href='../page/usuario.php'>Usuario</a></li>
                <li><a class='' href='../page/preguntas.php'>Preguntas</a></li>
                <li><a href='../page/preguntar.php'>Nueva Preguntas</a></li>
                <li><a href='../otros/cerrarSesion.php'><i class='fas fa-sign-out-alt'></i></i></a></li>
            </ul>
        </nav>
        <div id='contenido'>
        ";
    else:
		echo "
		<div class='alert alert-danger' role='alert' style='margin-top:55px;'>
            Acceso denegado. 
			Debe <a href='index.php'>iniciar sesión</a>
        </div>";        
		exit;
    endif;
?>
      
