<?php
include_once("includes/bd.php");
include_once("includes/mcript.php");

if(isset($_POST["actualizar"])){
    $usuario = $_POST['usuario'];
    $passw = $_POST['passw'];
    $passw1 = $_POST['passw1'];

    if($passw == $passw1){
        $passw= $encriptar($_POST['passw']);
        
        $result = $database -> update("usuario_tb", [
            "passw" => $passw
        ], [
            "nombre_usuario" => $usuario
        ]);

        if (!$result) {
            die("Query failed");
        }
    
        $_SESSION['mensaje'] = "Usuario actualizado";
        $_SESSION['mensaje_tipo'] = "warning";
        $_SESSION['login_user'] = $login_session;
    
        header("Location: login.php");
    }
}

?>