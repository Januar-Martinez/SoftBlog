<?php
    include 'conexionBD.php';

    $sqlmax= "select MAX(idUsuario) FROM Usuarios;";

    $datos = $conexion ->query($sqlmax) or die("error interno");

    $fila = $datos->fetch_array();

    $ID= $fila[0] + 1;

    $password=md5($_REQUEST['txtPassword']);

    $datos = $conexion->prepare("insert into Usuarios values (?,?,?,?);");
    $datos->bind_param('isss',$ID,$_REQUEST['txtNombre'],$_REQUEST['txtEmail'],$password);
    $datos->execute() or die('error interno #2');

    echo "
    <div class='alert alert-success' role='alert' style='margin-top:55px;'>
        Registro exitoso 
        <a href='../page/index.php'>inisiar sesión</a>
    </div>"; 
?>