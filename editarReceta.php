<title>Editar receta | Veggie Taste</title>
<?php
include_once('includes/bd.php');
include_once ('includes/navbar.php');
?>
<link rel="stylesheet" href="css/administrador.css">

<?php
if (isset($_GET['id_receta'])) {
    $id = $_GET['id_receta'];
    $result = $database->select("receta_tb", "*", ['id_receta' => $id]);

    if (count($result) == 1) {
        $nombre = $result[0]['nombre'];
        $categoria = $result[0]['categoria'];
        $imagen = $result[0]['imagen'];
        $preparacion = $result[0]['tiempo_preparacion'];
        $coccion = $result[0]['tiempo_coccion'];
        $tiempoTotal = $result[0]['tiempo_total'];
        $porciones = $result[0]['porciones'];
        $complejidad = $result[0]['complejidad'];
        $ocasion = $result[0]['ocasion'];
        $destacada = $result[0]['destacada'];
        $votos = $result[0]['cantidad_votos'];
        $descripcion = $result[0]['descripcion'];
        $ingredientes = $result[0]['ingredientes'];
        $instrucciones = $result[0]['instrucciones'];
    }
}

if (isset($_POST['actualizar'])) {
    $id = $_GET['id_receta'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    if($imagen == null){$imagen = $_POST['imagen'];}
    $preparacion = $_POST['preparacion'];
    $coccion = $_POST['coccion'];
    $tiempoTotal = $_POST['tiempoTotal'];
    $porciones = $_POST['porciones'];
    $complejidad = $_POST['complejidad'];
    $ocasion = $_POST['ocasion'];
    $destacada = $_POST['destacada'];
    $votos = $_POST['cantidad_votos'];
    $descripcion = $_POST['descripcion'];
    $ingredientes = $_POST['ingredientes'];
    $instrucciones = $_POST['instrucciones'];

    $result = $database->update("receta_tb", [
        "nombre" => $nombre,
        "categoria" => $categoria,
        "imagen" => $imagen,
        "tiempo_preparacion" => $preparacion,
        "tiempo_coccion" => $coccion,
        "tiempo_total" => $tiempoTotal,
        "porciones" => $porciones,
        "complejidad" => $complejidad,
        "ocasion" => $ocasion,
        "destacada" => $destacada,
        "cantidad_votos" => $votos,
        "descripcion" => $descripcion,
        "ingredientes" => $ingredientes,
        "instrucciones" => $instrucciones
    ], [
        "id_receta" => $id
    ]);

    header("Location: recetas.php");
}
?>

<main>
    <div class="row">
        <div class="col-info mt-5">
            <h1 class="text-green mt-5 ml-5 mb-5">Editar receta</h1>
        </div>
    </div>
    <form class="margin-form" action="editarReceta.php?id_receta=<?php echo $_GET['id_receta'] ?>" method="post">
        <div class="row mb-4">
            <div class="col-4">
                <label for="nombre">Nombre:</label>
                <input id="nombre" class="form-item" type="text" name="nombre" value="<?php echo $nombre ?>" placeholder="Nombre de la receta" required>
            </div>
            <div class="col-4">
                <img style="width: 17%;" src=<?php echo"imgRecetas/" .$imagen ?> alt="receta">
                <input id="img" class="form-item"  accept=".png, .jpg" type="file" name="imagen">
            </div>
            <div class="col-4">
                <label for="preparacion">Preparaci??n:</label>
                <input id="preparacion" class="form-item" type="text" name="preparacion" placeholder="Tiempo de preparaci??n" value="<?php echo $preparacion ?>" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-4">
                <label for="coccion">Cocci??n:</label>
                <input id="coccion" class="form-item" type="text" name="coccion" placeholder="Tiempo de cocci??n" value="<?php echo $coccion ?>" required>
            </div>
            <div class="col-4">
                <label for="total">Tiempo total:</label>
                <input id="total" class="form-item" type="text" name="tiempoTotal" placeholder="Tiempo total" value="<?php echo $tiempoTotal ?>" required>
            </div>
            <div class="col-4">
                <label for="porciones">Porciones:</label>
                <input id="porciones" class="form-item" type="text" name="porciones" value="<?php echo $porciones ?>" placeholder="Porciones" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-4">
                <label for="categoria">Categoria:</label>
                <select id="categoria" class="form-item selectores" name="categoria" value="<?php echo $categoria ?>" required>
                    <?php if ($categoria == "Desayuno") { ?>
                        <option selected value="Desayuno">Desayuno</option>
                        <option value="Bebidas">Bebidas</option>
                        <option value="Entradas">Entradas</option>
                        <option value="Almuerzo">Almuerzo</option>
                        <option value="Postre">Postres</option>
                        <option value="Sopas">Sopas</option>
                    <?php } else if ($categoria == "Bebidas") { ?>
                        <option selected value="Bebidas">Bebidas</option>
                        <option value="Desayuno">Desayuno</option>
                        <option value="Entradas">Entradas</option>
                        <option value="Almuerzo">Almuerzo</option>
                        <option value="Postre">Postres</option>
                        <option value="Sopas">Sopas</option>
                    <?php } else if ($categoria == "Entradas") { ?>
                        <option selected value="Entradas">Entradas</option>
                        <option value="Desayuno">Desayuno</option>
                        <option value="Bebidas">Bebidas</option>
                        <option value="Almuerzo">Almuerzo</option>
                        <option value="Postre">Postres</option>
                        <option value="Sopas">Sopas</option>
                    <?php } else if ($categoria == "Almuerzo") { ?>
                        <option selected value="Almuerzo">Almuerzo</option>
                        <option value="Desayuno">Desayuno</option>
                        <option value="Bebidas">Bebidas</option>
                        <option value="Entradas">Entradas</option>
                        <option value="Postre">Postres</option>
                        <option value="Sopas">Sopas</option>
                    <?php } else if ($categoria == "Postre") { ?>
                        <option selected value="Postre">Postres</option>
                        <option value="Desayuno">Desayuno</option>
                        <option value="Bebidas">Bebidas</option>
                        <option value="Entradas">Entradas</option>
                        <option value="Almuerzo">Almuerzo</option>
                        <option value="Sopas">Sopas</option>
                    <?php } else { ?>
                        <option selected value="Sopas">Sopas</option>
                        <option value="Desayuno">Desayuno</option>
                        <option value="Bebidas">Bebidas</option>
                        <option value="Entradas">Entradas</option>
                        <option value="Almuerzo">Almuerzo</option>
                        <option value="Postre">Postres</option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-4">
                <label for="complejidad">Complejidad:</label>
                <select class="form-item selectores" id="complejidad" name="complejidad" required>
                    <?php if ($complejidad == "F??cil") { ?>
                        <option selected value="F??cil">F??cil</option>
                        <option value="Intermedio">Intermedio</option>
                        <option value="Avanzado">Avanzado</option>
                    <?php } else if ($complejidad == "Intermedio") { ?>
                        <option selected value="Intermedio">Intermedio</option>
                        <option value="F??cil">F??cil</option>
                        <option value="Avanzado">Avanzado</option>
                    <?php } else { ?>
                        <option selected value="Avanzado">Avanzado</option>
                        <option value="Intermedio">Intermedio</option>
                        <option value="F??cil">F??cil</option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-4">
                <label for="ocasion">Ocasi??n:</label>
                <select class="form-item selectores" id="ocasion" name="ocasion" required>
                    <?php if ($ocasion == "Todas") { ?>
                        <option selected value="Todas">Todas</option>
                        <option value="Cumplea??os">Cumplea??os</option>
                        <option value="D??a del padre">D??a del padre</option>
                        <option value="D??a de la madre">D??a de la madre</option>
                        <option value="D??a del ni??o">D??a del ni??o</option>
                        <option value="Navidad">Navidad</option>
                        <option value="Semana Santa">Semana Santa</option>
                        <option value="Verano">Verano</option>
                    <?php } else if ($ocasion == "Cumplea??os") { ?>
                        <option selected value="Cumplea??os">Cumplea??os</option>
                        <option value="Todas">Todas</option>
                        <option value="D??a del padre">D??a del padre</option>
                        <option value="D??a de la madre">D??a de la madre</option>
                        <option value="D??a del ni??o">D??a del ni??o</option>
                        <option value="Navidad">Navidad</option>
                        <option value="Semana Santa">Semana Santa</option>
                        <option value="Verano">Verano</option>
                    <?php } else if ($ocasion == "D??a del padre") { ?>
                        <option selected value="D??a del padre">D??a del padre</option>
                        <option value="Todas">Todas</option>
                        <option value="Cumplea??os">Cumplea??os</option>
                        <option value="D??a de la madre">D??a de la madre</option>
                        <option value="D??a del ni??o">D??a del ni??o</option>
                        <option value="Navidad">Navidad</option>
                        <option value="Semana Santa">Semana Santa</option>
                        <option value="Verano">Verano</option>
                    <?php } else if ($ocasion == "D??a de la madre") { ?>
                        <option selected value="D??a de la madre">D??a de la madre</option>
                        <option value="Todas">Todas</option>
                        <option value="Cumplea??os">Cumplea??os</option>
                        <option value="Padre">D??a del padre</option>
                        <option value="D??a del ni??o">D??a del ni??o</option>
                        <option value="Navidad">Navidad</option>
                        <option value="Semana Santa">Semana Santa</option>
                        <option value="Verano">Verano</option>
                    <?php } else if ($ocasion == "D??a del ni??o") { ?>
                        <option selected value="D??a del ni??o">D??a del ni??o</option>
                        <option value="Todas">Todas</option>
                        <option value="Cumplea??os">Cumplea??os</option>
                        <option value="D??a del padre">D??a del padre</option>
                        <option value="D??a de la madre">D??a de la madre</option>
                        <option value="Navidad">Navidad</option>
                        <option value="Semana Santa">Semana Santa</option>
                        <option value="Verano">Verano</option>
                    <?php } else if ($ocasion == "Navidad") { ?>
                        <option selected value="Navidad">Navidad</option>
                        <option value="Todas">Todas</option>
                        <option value="Cumplea??os">Cumplea??os</option>
                        <option value="D??a del padre">D??a del padre</option>
                        <option value="D??a de la madre">D??a de la madre</option>
                        <option value="D??a del ni??o">D??a del ni??o</option>
                        <option value="Semana Santa">Semana Santa</option>
                        <option value="Verano">Verano</option>
                    <?php } else if ($ocasion == "Semana Santa") { ?>
                        <option selected value="Semana Santa">Semana Santa</option>
                        <option value="Todas">Todas</option>
                        <option value="Cumplea??os">Cumplea??os</option>
                        <option value="D??a del padre">D??a del padre</option>
                        <option value="D??a de la madre">D??a de la madre</option>
                        <option value="D??a del ni??o">D??a del ni??o</option>
                        <option value="Navidad">Navidad</option>
                        <option value="Verano">Verano</option>
                    <?php } else { ?>
                        <option selected value="Verano">Verano</option>
                        <option value="Todas">Todas</option>
                        <option value="Cumplea??os">Cumplea??os</option>
                        <option value="D??a del padre">D??a del padre</option>
                        <option value="D??a de la madre">D??a de la madre</option>
                        <option value="D??a del ni??o">D??a del ni??o</option>
                        <option value="Navidad">Navidad</option>
                        <option value="Semana Santa">Semana Santa</option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="row mb-5 pb-2">
            <div class="col-4">
                <label for="votos">Cantidad de votos: </label>
                <input id="votos" class="form-item" style="width: 25em;" type="text" name="cantidad_votos" placeholder="0" value="<?php echo $votos ?>">
            </div>
            <div class="col-4">
            <label for="destacada">Receta Destacada: </label>
                <input id="destacada" class="form-item" style="width: 26.5em;" type="text" name="destacada" placeholder="No" value="<?php echo $destacada ?>">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-6">
                <div class="col-1"><label>Descripci??n:</label></div>
                <textarea class="text-area" name="descripcion" id="descripcion" placeholder="Descripcion" cols="30" rows="10" required><?php echo $descripcion ?></textarea>
            </div>
            <div class="col-6">
            <div class="col-1"><label>Ingredientes:</label></div>
                <textarea class="text-area" name="ingredientes" id="ingredientes" placeholder="Ingredientes" cols="30" rows="10" required><?php echo $ingredientes ?></textarea>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
            <div class="col-1"><label>Instrucciones:</label></div>
                <textarea class="text-area1" name="instrucciones" id="instrucciones" placeholder="Instrucciones para la preparaci??n" cols="30" rows="10" required><?php echo $instrucciones ?></textarea>
            </div>
        </div>
        <div class="row text-center mb-5 pb-5">
        <div class="col-6">
                <input class="btn-submit" type="button" onclick="history.back()" name="Atras" value="Atr??s">
            </div>
            <div class="col-6">
                <input class="btn-submit" type="submit" name="actualizar" value="Actualizar">
            </div>
        </div>
    </form>
    </div>
</main>