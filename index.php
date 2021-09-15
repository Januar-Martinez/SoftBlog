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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body style="background-image: url('');">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>