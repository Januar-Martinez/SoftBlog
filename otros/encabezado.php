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
    <link rel="icon" type="image/png" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/estyle.css">
    <link rel="stylesheet" href="../css/estyleT.css">
    <link rel="stylesheet" href="../css/estiloM.css">
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
                    <h1 style='color:#b80f22; margin-top:20px;'>SoftBlog</h1>
                </a>
                <ul>
                    <li><a class='active' href='#'>Inicio</a></li>
                    <li><a href='#'>Preguntar</a></li>
                    <li><a href='#'>Tus Preguntas</a></li>
                    <li><a href='#'>...</a></li>
                    <li><a href='#'>Acerca de</a></li>
                </ul>
            </nav>

            <div class='wrapper'>
                <div class='sidebar'>
                    <h2>";?> <?= $_SESSION['usuario']?> <?php echo" </h2>
                    <h6>";?> <?= $_SESSION['emailUsuario']?> <?php echo"</h6>
                    <div class='social_media'>
                        <a href='../otros/cerrarSesion.php'><i class='fas fa-sign-out-alt'></i></i></a>
                    </div>
                </div>
            
                <div class='main_content'>
                    <div class='info'>
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
