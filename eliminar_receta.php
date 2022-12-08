<?php
include("includes/bd.php");

if (isset($_GET['id_receta'])) {
    $result = $database -> delete("receta_tb", ["id_receta" => $_GET['id_receta']]);

    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['mensaje'] = " Receta eliminado correctamente!";
    $_SESSION['mensaje_tipo'] = "danger";

    header("location: recetas.php");
}
?>