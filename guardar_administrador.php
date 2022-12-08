<?php
include_once("includes/bd.php");
include_once("includes/mcript.php");

if(isset($_POST["guardar_usuario"])){
    
    $nombre = $_POST['nombre'];
    $usuario = $_POST['nombre_usuario'];
    $correo = $_POST['correo'];
    $passw = $_POST['passw'];
    $passw1 = $_POST['passw1'];

    if($passw == $passw1){
        $passw= $encriptar($_POST['passw']);
        $result = $database -> insert("usuario_tb", [
            "nombre_usuario" => $usuario,
            "correo" => $correo,
            "passw" => $passw,
            "perfil" => 'Administrador',
            "nombre" => $nombre,
        ]);

        if(!$result){
            die("Query failed");
        }

        $_SESSION['mensaje'] = "Usuario guardado correctamente!";
        $_SESSION['mensaje_tipo'] = 'success';
        header("location: login.php");

    }else{
        echo "Las contraseñas no coinciden";
    }
}
?>
