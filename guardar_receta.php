<?php
include_once("includes/bd.php");

if(isset($_POST['guardar_receta'])){
    $file = $_FILES["imagen"]["name"];
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

    $nombre = $_POST['nombre'];
    $imagen = $file;
    $preparacion = $_POST['preparacion'];
    $coccion = $_POST['coccion'];
    $tiempoTotal = $_POST['tiempoTotal'];
    $porciones = $_POST['porciones'];
    $categoria = $_POST['categoria'];
    $complejidad = $_POST['complejidad'];
    $ocasion = $_POST['ocasion'];
    $descipcion = $_POST['descripcion'];
    $ingredientes  = $_POST['ingredientes'];
    $instrucciones = $_POST['instrucciones'];

    $resultado = $database->insert("receta_tb", [
        "nombre" => $nombre,
        "categoria" => $categoria,
        "imagen" => $imagen,
        "tiempo_preparacion" => $preparacion,
        "tiempo_coccion" => $coccion,
        "tiempo_total" => $tiempoTotal,
        "porciones" => $porciones,
        "complejidad" => $complejidad,
        "ocasion" => $ocasion,
        "descripcion" => $descipcion,
        "ingredientes" => $ingredientes,
        "instrucciones" => $instrucciones
    ]);

    header("location: recetas.php");
}
?>