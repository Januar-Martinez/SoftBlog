<?php
$mensaje = null;
if ($_SERVER["REQUEST_METHOD"] == "POST"):
    include '../otros/conexionBD.php';
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
    <link rel="icon" type="image/png" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/estiloIndex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body style="background-color: #f5f3f3ee;">
    <div class="login-box">
      <img src="../img/logo.png" class="avatar" alt="Avatar Image">
      <h1>SoftBlog</h1>
      <form method="post" action="index.php">
        <!-- USERNAME INPUT -->
        <label for="username">Email</label>
        <input type="text" name = "txtEmail" placeholder="Alguien@softblog.com">
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" name = "txtPassword" placeholder="Escribe La Contraseña">
        <input type="submit" value="Iniciar Sesión">
        <a href="registrarse.php">Resgistrarse</a>
      </form>
    </div>
	<div class="container">
		<?=$mensaje;?>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>