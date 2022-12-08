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
            header("Location: home.php");
        } else {
            $error = "Error en la contraseña";
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
    <title>Iniciar sesion | Veggie Taste</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/utils.css">
</head>

<body>
    <div class="logo">
        <img class="img-logo" src="imgInicio/LogoVT.png" alt="logo veggie taste">
    </div>

    <section class="formulario">
        <h2 class="login-title mt-5 mb-4">Inicio de Sesión</h2>
        <form class="form-margin" action="" method="post">
            <div class="inner-col">
                <input class="form-item" name="usuario" type="text" placeholder="Usuario" required>
            </div>
            <div class="inner-col">
                <input id="logpass" class="form-item" type="password" name="passw" placeholder="Contraseña" required>
            </div>
            <div>
                <label class="text-login">
                    <input class="mb-5" type="checkbox" onclick="showPassword()"> Mostrar contraseña
                </label>
            </div>
            <div class="inner-col">
                <input class="btn-login" type="submit" name="iniciar" value="Iniciar Sesión">
            </div>
        </form>
        <div class="inner-col">
            <a id="recuperarContraseña" class="link-login" href="#">¿Olvidaste tu contraseña?</a>
        </div>
        <div class="inner-col">
            <h6 class="text-login mb-3">Si no tienes cuenta en Veggie Taste, puedes
                <a href="#" class="toggle link-login">registrarte aquí</a>
            </h6>
            <h6 class="text-login mb-3"> <a href="home.php" class="link-login">Ingresar</a> sin registrarse</h6>
        </div>
    </section>

    <!--Pop up para recuperar contraseña-->
    <dialog id="favDialog" class="pop-up">
        <form action="restablecer_password.php" method="post">
            <section class="text-center">
                <img class="img-30 mt-1 mb-4" src="imgInicio/hoja1.png" alt="hoja decorativa">
                <h3 class="text-green mb-4">Recuperar contraseña</h3>
                <div class="inner-col">
                    <input class="form-popup" type="text" name="usuario" placeholder="Usuario" required>
                </div>
                <div class="inner-col">
                    <input class="form-popup" type="password" name="passw" id="password" placeholder="Contraseña nueva" required>
                </div>
                <div class="inner-col">
                    <input class="form-popup" type="password" name="passw1" id="confPassword" placeholder="Confirmar contraseña" required>
                </div>
                <div>
                    <input type="checkbox" onclick="showPassword()"> Mostrar contraseña
                </div>
            </section>
            <div class="text-center">
                <button id="cancel" type="reset" class="btn-popup mr-4 mb-5">Volver</button>
                <button type="submit" name="actualizar" class="btn-popup">Aceptar</button>
            </div>
        </form>
    </dialog>

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

        <form class="form-margin" action="" method="post" enctype="multipart/form-data">
            <div class="inner-col">
                <input class="form-item" type="text" name="nombre" placeholder="Nombre completo" required>
            </div>
            <div class="inner-col">
                <input class="form-item" type="text" name="nombre_usuario" placeholder="Nombre de usuario" required>
            </div>
            <div class="inner-col">
                <input class="form-item" type="email" name="correo" placeholder="Correo electrónico" required>
            </div>
            <div class="mb-1">
                <label for="">Elegir foto de perfil</label>
            </div>
            <div class="inner-col">
                <input class="form-item" name="imagen" type="file">
            </div>
            <div class="inner-col">
                <input id="signpass" name="passw" class="form-item" type="password" placeholder="Contraseña" required>
            </div>
            <div class="inner-col">
                <input id="confsignpass" name="passw1" class="form-item" type="password" placeholder="Confirmar contraseña" required>
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
            <h6 class="text-login">Si ya tienes una cuenta en Veggie Taste, puedes
                <a href="#" class="toggle link-login">iniciar sesión aquí</a>
            </h6>
        </div>
    </section>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/login.js"></script>
</body>

</html>