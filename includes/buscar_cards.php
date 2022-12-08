<?php
    include_once("includes/bd.php");

    if(isset($_POST["buscar"])){

        $nombre = $_POST['fname'];
        $categoria = $_POST['categoria'];
        $complejidad = $_POST['complejidad'];
        $ocasion = $_POST['ocasion'];

        if($categoria == "Bebidas" || $categoria == "Postres" || $categoria == "Almuerzo" || $categoria == "Sopas" || $categoria == "Entradas" || $categoria == "Desayuno"){
            
            $result = $database -> select("receta_tb", "**", ["categoria" => $categoria]);

            for ($i = 0; $i < count($result); $i++) {
                if ($result[$i]['id_receta'] != $id) { ?>
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
        
    }//fin del if(isset($_POST["buscar"]))
?>