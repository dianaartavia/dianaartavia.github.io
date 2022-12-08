<?php
include_once("includes/bd.php");
include_once("includes/mcript.php");

if(isset($_POST["guardar_usuario"])){

    $file = $_FILES["imagen"]["name"];
    if($file != null){
        $url_temp = $_FILES["imagen"]["tmp_name"];
        $url_insert = dirname(__FILE__) . "/imgRecetas";
        $url_target = str_replace('\\', '/', $url_insert). '/' . $file;

        if(!file_exists($url_insert)){
            mkdir($url_insert, 0777, true);
        };

        if(move_uploaded_file($url_temp, $url_target)){
            "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
        } else {
            echo "Ha habido un error al cargar tu archivo.";
        }
    }else{
        $file = "";
    }
    

    $nombre = $_POST['nombre'];
    $usuario = $_POST['nombre_usuario'];
    $correo = $_POST['correo'];
    $imagen = $file;
    $passw = $_POST['passw'];
    $passw1 = $_POST['passw1'];

    if($passw == $passw1){
        $passw= $encriptar($_POST['passw']);
        $result = $database -> insert("usuario_tb", [
            "nombre_usuario" => $usuario,
            "correo" => $correo,
            "passw" => $passw,
            "perfil" => 'Consulta',
            "nombre" => $nombre,
            "img_perfil" => $imagen
        ]);

        if(!$result){
            die("Query failed");
        }

        $_SESSION['mensaje'] = "Usuario guardado correctamente!";
        $_SESSION['mensaje_tipo'] = 'success';
        header("location: home.php");

    }else{
        echo "Las contraseñas no coinciden";
    }
}
?>
