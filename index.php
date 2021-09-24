<?php
$mensaje = null;
if ($_SERVER["REQUEST_METHOD"] == "POST"):
    include 'conexionBD.php';
    $contraEncriptada = md5($_REQUEST['txtPassword']);
    $sql = "select * from Usuarios where Email = ? and password = ?;";
    $datos = $conexion->prepare($sql);
    $datos->bind_param('ss',$_REQUEST['txtEmail'],$contraEncriptada);
    $datos->execute();
    $datos = $datos->get_result();
    if($fila =$datos->fetch_assoc()):
        session_start();
        $_SESSION['idUsuario'] = $fila['idUsuario'];
        $_SESSION['usuario'] = $fila['nombre'];
        $_SESSION['emailUsuario'] = $fila['Email'];
        header('Location: inicio.php');
    else:
        $mensaje = "
        <div class='alert alert-danger' role='alert'>
            Datos incorrectos
        </div>
        ";
    endif;
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftBlog</title>
    <link rel="stylesheet" href="master.css">
</head>
<body>
    <div class="login-box">
      <img src="//img/logo.png" class="avatar" alt="Avatar Image">
      <h1>SoftBlog</h1>
      <form>
        <!-- USERNAME INPUT -->
        <label for="username">Email</label>
        <input type="text" placeholder="Alguien@softblog.com">
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Escribe La Contraseña">
        <input type="submit" value="Iniciar Sesión">
        <a href="#">Resgistrarse</a>
      </form>
    </div>
</body>
</html>