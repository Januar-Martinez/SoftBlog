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
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="icon" type="image/png" href="../img/favicon.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
<?php
//var_dump ($_SESSION);
    if(isset($_SESSION['emailUsuario'])):
        echo"
        <nav>
            <input type='checkbox' id='check'>
            <label for='check' class='checkbtn'>
                <i class='fas fa-bars'></i>
            </label>
            <a href='#' class='enlace'>
                <h1>SoftBlog</h1>
            </a>
            <ul>
                <li><a class='' href='../page/inicio.php'>Inicio</a></li>
                <li><a href='../page/pregunta.php'>Nueva Preguntas</a></li>
                <li><a href='../otros/cerrarSesion.php'><i class='fas fa-sign-out-alt'></i></i></a></li>
            </ul>
        </nav>
        <div id='contenido'>
            <div'>
                <center>
                    <img id='imagen' src='../img/info.jpeg' alt=''>
                </center>
            <div>
            <div id='pagina'>
                <div>
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
      
