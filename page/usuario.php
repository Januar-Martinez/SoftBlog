<?php
  include '../otros/encabezado.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftBlog</title>
    <link rel="icon" type="image/png" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/estiloUser.css">
</head>
<body>
    <div class="login-box">
      <img src="../img/logo.png" class="avatar" alt="Avatar Image">
      <h1><?= $_SESSION['usuario']?></h1>
      <p><?= $_SESSION['emailUsuario']?></p>
      <form action="inicio.php">
        <input type="submit" value="Volver">
      </form>
    </div>
</body>
</html>