<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftBlog</title>
    <link rel="icon" type="image/png" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/estiloRegistrarse.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body style="background-color: #f5f3f3ee;">
    <div class="login-box">
      <img src="../img/logo.png" class="avatar" alt="Avatar Image">
      <h1>SoftBlog</h1>

      <form onsubmit='verificarPasswords(); return false' method="post" action="../otros/nuevoUsuario.php">

        <label for="username">Nombre</label>
        <input type="text" name = "txtNombre" placeholder="User Name" required>

        <label for="username">Email</label>
        <input type="text" name = "txtEmail" placeholder="Alguien@softblog.com" required>

        <label for="password">Contraseña</label>
        <input type="password" name = "txtPassword" id='txtpassword' placeholder="Escribe La Contraseña" required>

        <label for="password">Verifique Contraseña</label>
        <input type="password" name = "txtPassword" id='txtpassword2' placeholder="Escriba Nuevamente La Contraseña" required>

        <input type="submit" value="Registrarse" id="enviar">

        <div class='alert alert-danger' role='alert' style='visibility:hidden;' id='mensaje'>
            Contraseñas no coinciden
        </div>
      </form>
    </div>
</body>
</html>
<?php
    echo"
        <script type='text/javascript'> 
            function verificarPasswords() {
                
                // Ontenemos los valores de los campos de contraseñas 
                txtpassword = document.getElementById('txtpassword');
                txtpassword2 = document.getElementById('txtpassword2');
                // Verificamos si las constraseñas no coinciden 
                if (txtpassword.value != txtpassword2.value) {
                    document.getElementById('mensaje').style.visibility = 'visible';
                    event.preventDefault()
                    return false
                }
                
                else {
                    $('#enviar').submit();
                    return true;
                }
            } 
            
        </script>
        ";
?>
