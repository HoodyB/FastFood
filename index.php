<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <title>FastFood: Inicio de sesión</title>
</head>
<body>
<div class="jumbotron" id="div-main">
<form action="modelo/validarlogin/validar.php" method="POST">
<h1>FASTFOOD LOGIN</h1>
<label>Usuario:</label><br>
<input type="text" name="userr" id="user" class="form-control"placeholder="Ingrese aqui" require><br>
<label>Contraseña:</label>
<input type="password" name="passw" id="pass" class="form-control" placeholder="Ingrese aqui" require>
<button type="submit" class="btn btn-primary" id="enviar">Iniciar Sesión</button>
</form>
</div>
</body>
</html>
