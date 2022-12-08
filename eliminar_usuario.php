<?php
include_once("includes/bd.php");

if(isset($_GET['nombre_usuario'])){
    $result = $database -> delete("usuario_tb", ["nombre_usuario" => $_GET['nombre_usuario']]);

    if(!$result){
        die("Query Failed");
    }
    
    $_SESSION['mensaje'] = " Usuario eliminado correctamente!";
    $_SESSION['mensaje_tipo'] = "danger";

    header("location: usuarios.php");
}
?>