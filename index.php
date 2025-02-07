<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <form method="post">
            <h2>Hola</h2>
            <p>Por favor realiza tu registro de usuario</p>
            <div class ="input-wrapper">
                <input type="email" name="email" placeholder="Email">
                <img class="input-icon"src="images/email.svg" alt="">
            </div>
            <div class ="input-wrapper">
                <input type="text" name="name" placeholder="Nombre">
                <img class="input-icon"src="images/name.svg" alt="">
            </div>
            <div class ="input-wrapper">
                <input type="text" name="id_empresarial" placeholder="Id Empresarial">
                <img class="input-icon"src="images/name.svg" alt="">
            </div>
            <div class ="input-wrapper">
                <input type="password" name="password" placeholder="Contraseña">
                <img class="input-icon"src="images/password.svg" alt="">
            </div>
            <input class="btn" type="submit" name="register" value="Registrarse">
    </form>
    <?php
    include("registrar.php");
    ?>
</body>
</html>
