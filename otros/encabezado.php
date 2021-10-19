<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/master.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
<?php
    if(isset($_SESSION['emailUsuario'])):
        echo"
            <nav>
                <input type='checkbox' id='check'>
                <label for='check' class='checkbtn'>
                    <i class='fas fa-bars'></i>
                </label>
                <a href='#' class='enlace'>
                    <img src='../img/logo.png' alt='' class='logo'>
                </a>
                <ul>
                    <li><a class='active' href='#'>Inicio</a></li>
                    <li><a href='#'>Preguntar</a></li>
                    <li><a href='#'>Tus Preguntas</a></li>
                    <li><a href='#'>...</a></li>
                    <li><a href='#'>Acerca de</a></li>
                </ul>
            </nav>
            <section>
                <div class='social_media'>
                    <a href='../otros/cerrarSesion.php'><i class='fas fa-sign-out-alt'></i></i></a>
                </div>
            </section>
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
</body>
</html>