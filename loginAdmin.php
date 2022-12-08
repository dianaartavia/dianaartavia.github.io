<?php
include_once("includes/bd.php");
include_once("includes/mcript.php");
session_start();

if (isset($_POST['iniciar'])) {
    $usuario = $_POST['usuario'];
    $passw = $_POST['passw'];

    $user = $database->select("usuario_tb", "*", ["nombre_usuario" => $usuario]);

    if (count($user) > 0) {
        if ($desencriptar($user[0]['passw']) === $passw) {
            $_SESSION['login_user'] = $usuario;
            if ($user[0]['perfil'] == "Administrador") {
                header("Location: recetas.php");
            } else {
                $error = "Error en la contraseña";
            }
        }
    } else {
        $error = "Usuario invalido";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador | Veggie Taste</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/utils.css">
</head>

<body>
    <div class="logo">
        <a href=""><img class="img-logo" src="imgInicio/LogoVT.png" alt="logo veggie taste"></a>
    </div>

    <section class="formulario">
        <h2 class="login-title mt-5 mb-4">Inicio de Sesión</h2>
        <form class="form-margin" action="" method="post">

            <div class="inner-col">
                <input class="form-item" name="usuario" type="text" placeholder="Usuario" required>
            </div>
            <div class="inner-col">
                <input id="loginpass" class="form-item" name="passw" type="password" placeholder="Contraseña" required>
            </div>
            <div>
                <label class="text-login">
                    <input class="mb-5" type="checkbox" onclick="showPassword()"> Mostrar contraseña
                </label>
            </div>
            <div class="inner-col">
                <input class="btn-login" name="iniciar" type="submit" value="Iniciar Sesión">
            </div>
        </form>
        <div class="inner-col">
            <h6 class="text-login mb-3">¿Eres un nuevo administrador?
                <a href="#" class="toggle link-login">registrate aquí</a>
            </h6>
    </section>
    <section class="formulario">
        <h2 class="login-title mt-5 mb-4">Registro</h2>
        <?php
        if (isset($_SESSION['mensaje'])) {
        ?>
            <div class="alert alert-<?php $_SESSION['mensaje_tipo']; ?> alert-dismissible fade show" role="alert">
                <?php $_SESSION['mensaje']; ?>
                <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                    <span arial-hidden="true">&times;</span>
                </button>
            </div>
        <?php session_unset();
        } ?>
        <form class="form-margin" action="" method="post">
            <div class="inner-col">
                <input class="form-item" type="text" name="nombre" placeholder="Nombre completo" required>
            </div>
            <div class="inner-col">
                <input class="form-item" type="text" name="nombre_usuario" placeholder="Nombre de usuario" required>
            </div>
            <div class="inner-col">
                <input class="form-item" type="email" name="correo" placeholder="Correo electrónico" required>
            </div>
            <div class="inner-col">
                <input id="signpassw" class="form-item" name="passw" type="password" placeholder="Contraseña" required>
            </div>
            <div class="inner-col">
                <input id="confipass" class="form-item" name="passw1" type="password" placeholder="Confirmar contraseña" required>
            </div>
            <div>
                <label class="text-login">
                    <input class="mb-5" type="checkbox" onclick="showPassword()"> Mostrar contraseña
                </label>
            </div>
            <div class="inner-col">
                <input class="btn-login" type="submit" name="guardar_usuario" value="Registrarse">
            </div>
        </form>
        <div class="inner-col  mb-3">
            <h6 class="text-login">Si ya eres administrador, puedes
                <a href="#" class="toggle link-login">iniciar sesión aquí</a>
            </h6>
        </div>
    </section>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/loginAdmin.js"></script>
</body>

</html>