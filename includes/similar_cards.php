<?php
include_once("bd.php");

$id = $_GET['id_receta'];
$result = $database->select("receta_tb", "*", ["id_receta" => $id]);
$categoria = $result[0]['ocasion'];


if ($result[0]['categoria'] == "Bebidas") {
    $result = $database->select("receta_tb", "*", ["categoria" => "Bebidas"]);
    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i]['id_receta'] != $id) {
?>
            <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                <div class="card">
                    <img class="img-100 m-auto" src=<?php echo "imgRecetas/" . $result[$i]['imagen'] ?> alt="...">
                    <h3 class="pb-4 pt-3"><?php echo $result[$i]['nombre'] ?></h3>
                    <a class="btn-card" href="receta.php?id_receta=<?php echo $result[$i]['id_receta'] ?>">Ver</a>
                    <img class="img-fav" src="imgInicio/fav.png" alt="Guardar en favoritos">
                </div>
            </div>
        <?php
        }
    }
} else if ($result[0]['categoria'] == "Postres") {
    $result = $database->select("receta_tb", "*", ["categoria" => "Postres"]);
    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i]['id_receta'] != $id) {
        ?>
            <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                <div class="card">
                    <img class="img-100 m-auto" src=<?php echo "imgRecetas/" . $result[$i]['imagen'] ?> alt="...">
                    <h3 class="pb-4 pt-3"><?php echo $result[$i]['nombre'] ?></h3>
                    <a class="btn-card" href="receta.php?id_receta=<?php echo $result[$i]['id_receta'] ?>">Ver</a>
                    <img class="img-fav" src="imgInicio/fav.png" alt="Guardar en favoritos">
                </div>
            </div>
        <?php
        }
    }
} else if ($result[0]['categoria'] == "Almuerzo") {
    $result = $database->select("receta_tb", "*", ["categoria" => "Almuerzo"]);
    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i]['id_receta'] != $id) {
        ?>
            <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                <div class="card">
                    <img class="img-100 m-auto" src=<?php echo "imgRecetas/" . $result[$i]['imagen'] ?> alt="...">
                    <h3 class="pb-4 pt-3"><?php echo $result[$i]['nombre'] ?></h3>
                    <a class="btn-card" href="receta.php?id_receta=<?php echo $result[$i]['id_receta'] ?>">Ver</a>
                    <img class="img-fav" src="imgInicio/fav.png" alt="Guardar en favoritos">
                </div>
            </div>
        <?php
        }
    }
} else if ($result[0]['categoria'] == "Sopas") {
    $result = $database->select("receta_tb", "*", ["categoria" => "Sopas"]);
    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i]['id_receta'] != $id) {
        ?>
            <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                <div class="card">
                    <img class="img-100 m-auto" src=<?php echo "imgRecetas/" . $result[$i]['imagen'] ?> alt="...">
                    <h3 class="pb-4 pt-3"><?php echo $result[$i]['nombre'] ?></h3>
                    <a class="btn-card" href="receta.php?id_receta=<?php echo $result[$i]['id_receta'] ?>">Ver</a>
                    <img class="img-fav" src="imgInicio/fav.png" alt="Guardar en favoritos">
                </div>
            </div>
        <?php
        }
    }
} else if ($result[0]['categoria'] == "Entradas") {
    $result = $database->select("receta_tb", "*", ["categoria" => "Entradas"]);
    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i]['id_receta'] != $id) {
        ?>
            <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                <div class="card">
                    <img class="img-100 m-auto" src=<?php echo "imgRecetas/" . $result[$i]['imagen'] ?> alt="...">
                    <h3 class="pb-4 pt-3"><?php echo $result[$i]['nombre'] ?></h3>
                    <a class="btn-card" href="receta.php?id_receta=<?php echo $result[$i]['id_receta'] ?>">Ver</a>
                    <img class="img-fav" src="imgInicio/fav.png" alt="Guardar en favoritos">
                </div>
            </div>
        <?php
        }
    }
} else {
    $result = $database->select("receta_tb", "*", ["categoria" => "Desayuno"]);
    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i]['id_receta'] != $id) {
        ?>
            <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                <div class="card">
                    <img class="img-100 m-auto" src=<?php echo "imgRecetas/" . $result[$i]['imagen'] ?> alt="...">
                    <h3 class="pb-4 pt-3"><?php echo $result[$i]['nombre'] ?></h3>
                    <a class="btn-card" href="receta.php?id_receta=<?php echo $result[$i]['id_receta'] ?>">Ver</a>
                    <img class="img-fav" src="imgInicio/fav.png" alt="Guardar en favoritos">
                </div>
            </div>
<?php
        }
    }
}
/*
if ($result[0]['ocasion'] == "Todas") {
    $result = $database->select("receta_tb", "*", ["ocasion" => "Todas"]);
    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i]['id_receta'] != $id && $result[$i]['categoria'] != $categoria) {
?>
            <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                <div class="card">
                    <img class="img-100 m-auto" src=<?php echo "imgRecetas/" . $result[$i]['imagen'] ?> alt="...">
                    <h3 class="pb-4 pt-3"><?php echo $result[$i]['nombre'] ?></h3>
                    <a class="btn-card" href="receta.php?id_receta=<?php echo $result[$i]['id_receta'] ?>">Ver</a>
                    <img class="img-fav" src="imgInicio/fav.png" alt="Guardar en favoritos">
                </div>
            </div>
        <?php
        }
    }
} else if ($result[0]['ocasion'] == "Cumpleaños") {
    $result = $database->select("receta_tb", "*", ["ocasion" => "Cumpleaños"]);
    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i]['id_receta'] != $id && $result[$i]['categoria'] != $categoria) {
        ?>
            <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                <div class="card">
                    <img class="img-100 m-auto" src=<?php echo "imgRecetas/" . $result[$i]['imagen'] ?> alt="...">
                    <h3 class="pb-4 pt-3"><?php echo $result[$i]['nombre'] ?></h3>
                    <a class="btn-card" href="receta.php?id_receta=<?php echo $result[$i]['id_receta'] ?>">Ver</a>
                    <img class="img-fav" src="imgInicio/fav.png" alt="Guardar en favoritos">
                </div>
            </div>
        <?php
        }
    }
} else if ($result[0]['ocasion'] == "Día del padre") {
    $result = $database->select("receta_tb", "*", ["ocasion" => "Día del padre"]);
    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i]['id_receta'] != $id && $result[$i]['categoria'] != $categoria) {
        ?>
            <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                <div class="card">
                    <img class="img-100 m-auto" src=<?php echo "imgRecetas/" . $result[$i]['imagen'] ?> alt="...">
                    <h3 class="pb-4 pt-3"><?php echo $result[$i]['nombre'] ?></h3>
                    <a class="btn-card" href="receta.php?id_receta=<?php echo $result[$i]['id_receta'] ?>">Ver</a>
                    <img class="img-fav" src="imgInicio/fav.png" alt="Guardar en favoritos">
                </div>
            </div>
        <?php
        }
    }
} else if ($result[0]['ocasion'] == "Día de la madre") {
    $result = $database->select("receta_tb", "*", ["ocasion" => "Día de la madre"]);
    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i]['id_receta'] != $id && $result[$i]['categoria'] != $categoria) {
        ?>
            <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                <div class="card">
                    <img class="img-100 m-auto" src=<?php echo "imgRecetas/" . $result[$i]['imagen'] ?> alt="...">
                    <h3 class="pb-4 pt-3"><?php echo $result[$i]['nombre'] ?></h3>
                    <a class="btn-card" href="receta.php?id_receta=<?php echo $result[$i]['id_receta'] ?>">Ver</a>
                    <img class="img-fav" src="imgInicio/fav.png" alt="Guardar en favoritos">
                </div>
            </div>
        <?php
        }
    }
} else if ($result[0]['ocasion'] == "Día del niño") {
    $result = $database->select("receta_tb", "*", ["ocasion" => "Día del niño"]);
    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i]['id_receta'] != $id && $result[$i]['categoria'] != $categoria) {
        ?>
            <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                <div class="card">
                    <img class="img-100 m-auto" src=<?php echo "imgRecetas/" . $result[$i]['imagen'] ?> alt="...">
                    <h3 class="pb-4 pt-3"><?php echo $result[$i]['nombre'] ?></h3>
                    <a class="btn-card" href="receta.php?id_receta=<?php echo $result[$i]['id_receta'] ?>">Ver</a>
                    <img class="img-fav" src="imgInicio/fav.png" alt="Guardar en favoritos">
                </div>
            </div>
        <?php
        }
    }
} else if ($result[0]['ocasion'] == "Navidad") {
    $result = $database->select("receta_tb", "*", ["ocasion" => "Navidad"]);
    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i]['id_receta'] != $id && $result[$i]['categoria'] != $categoria) {
        ?>
            <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                <div class="card">
                    <img class="img-100 m-auto" src=<?php echo "imgRecetas/" . $result[$i]['imagen'] ?> alt="...">
                    <h3 class="pb-4 pt-3"><?php echo $result[$i]['nombre'] ?></h3>
                    <a class="btn-card" href="receta.php?id_receta=<?php echo $result[$i]['id_receta'] ?>">Ver</a>
                    <img class="img-fav" src="imgInicio/fav.png" alt="Guardar en favoritos">
                </div>
            </div>
        <?php
        }
    }
}else if ($result[0]['ocasion'] == "Semana Santa") {
    $result = $database->select("receta_tb", "*", ["ocasion" => "Semana Santa"]);
    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i]['id_receta'] != $id && $result[$i]['categoria'] != $categoria) {
        ?>
            <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                <div class="card">
                    <img class="img-100 m-auto" src=<?php echo "imgRecetas/" . $result[$i]['imagen'] ?> alt="...">
                    <h3 class="pb-4 pt-3"><?php echo $result[$i]['nombre'] ?></h3>
                    <a class="btn-card" href="receta.php?id_receta=<?php echo $result[$i]['id_receta'] ?>">Ver</a>
                    <img class="img-fav" src="imgInicio/fav.png" alt="Guardar en favoritos">
                </div>
            </div>
        <?php
        }
    }
}else {
    $result = $database->select("receta_tb", "*", ["ocasion" => "Verano"]);
    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i]['id_receta'] != $id && $result[$i]['categoria'] != $categoria) {
        ?>
            <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                <div class="card">
                    <img class="img-100 m-auto" src=<?php echo "imgRecetas/" . $result[$i]['imagen'] ?> alt="...">
                    <h3 class="pb-4 pt-3"><?php echo $result[$i]['nombre'] ?></h3>
                    <a class="btn-card" href="receta.php?id_receta=<?php echo $result[$i]['id_receta'] ?>">Ver</a>
                    <img class="img-fav" src="imgInicio/fav.png" alt="Guardar en favoritos">
                </div>
            </div>
<?php
        }
    }
}*/
?>