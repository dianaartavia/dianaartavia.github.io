    <title>Receta | Veggie Taste</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/receta.css">
    <link rel="stylesheet" href="css/utils.css">
    <?php
    include_once("includes/bd.php");
    include_once('includes/header.php');
    ?>

    <?php
    $id = $_GET['id_receta'];
    $result = $database->select("receta_tb", "*", ["id_receta" => $id]);
    ?>

    <main>
        <section>
            <div class="row text-center">
                <div class="column-receta" data-aos="fade-right" data-aos-duration="1500">
                    <img class="img-80" src="<?php echo "imgRecetas/" . $result[0]['imagen'] ?>" alt="Receta">
                </div>
                <div class="column-receta">
                    <h3 class="text-green title-main"><?php echo $result[0]['nombre'] ?></h3>
                </div>
                <div class="column-3">
                    <img class="img-favs" src="imgInicio/fav.png" alt="Guardar en favoritos">
                </div>
                <div class="column-3 votos">
                    <h3 class="text-green">4 <img class="" src="imgInicio/destacada2.png" alt="Icono de estrella"></h3>
                    <p class="title-op text-green">20 opiniones</p>
                </div>
            </div>
        </section>
        <section>
            <div class="row bg-green mb-5 mt-5">
                <div class="column-1">
                    <img class="pt-4" src="imgInicio/destacada1.png" alt="Icono destacado">
                    <p class="main-text pos-abs"></p>
                </div>
                <div class="column-1">
                    <img class="pt-4" src="imgInicio/preparacion.png" alt="Icono reloj">
                    <p class="main-text pos-abs">Preparacion <span><?php echo $result[0]['tiempo_preparacion'] ?></span></p>
                </div>
                <div class="column-1">
                    <img class="pt-4" src="imgInicio/coccion.png" alt="Icono reloj">
                    <p class="main-text pos-abs">Cocción <span><?php echo $result[0]['tiempo_coccion'] ?></span></p>
                </div>
                <div class="column-1">
                    <img class="pt-4 pb-4" src="imgInicio/tiempo1.png" alt="Icono reloj">
                    <p class="main-text pos-abs">Total <span><?php echo $result[0]['tiempo_total'] ?></span></p>
                </div>
            </div>
            <div class="row bg-green mb-5">
                <div class="column-1">
                    <img class="pt-4" src="imgInicio/complejidad.png" alt="Icono destacado">
                    <p class="main-text pos-abs">Complejidad <span><?php echo $result[0]['complejidad'] ?></span></p>
                </div>
                <div class="column-1">
                    <img class="pt-4" src="imgInicio/categoria.png" alt="Icono reloj">
                    <p class="main-text pos-abs">Categoria <span><?php echo $result[0]['categoria'] ?></span></p>
                </div>
                <div class="column-1">
                    <img class="pt-4" src="imgInicio/ocasion.png" alt="Icono reloj">
                    <p class="main-text pos-abs">Ocasión <span><?php echo $result[0]['ocasion'] ?></span></p>
                </div>
                <div class="column-1">
                    <img class="pt-4 pb-4" src="imgInicio/porciones.png" alt="Icono reloj">
                    <p class="main-text pos-abs">Porciones <span><?php echo $result[0]['porciones'] ?></span></p>
                </div>
            </div>
        </section>
        <section>
            <div class="row container mb-3 gap-5 ">
                <div class="column-4">
                    <h3 class="text-green fs-titles">Descripción</h3>
                    <p class="fs-main"><?php echo $result[0]['descripcion'] ?></p>
                </div>
                <div class="column-4">
                    <h3 class="text-green fs-titles">Lista de ingredientes</h3>
                    <div class="fs-main ml-3">
                        
                        <?php echo "<li>".str_replace(",", "<li>", $result[0]['ingredientes']) ?>
                    </div>
                </div>
            </div>
            <div class="row container mb-3">
                <div class="column-2">
                    <h3 class="text-green fs-titles">Instrucciones</h3>
                    <div class="fs-main ml-3">
                        
                    <?php 
                    echo "<li>".str_replace(". ", "<li>", $result[0]['instrucciones']);
                     ?>
                    </div>
                </div>
            </div>
            <div class="row container mb-3">
                <div class="column-2 text-center">
                    <h3 class="text-green fs-titles mb-4">Valora esta receta</h3>
                    <span id="star1" class="fa fa-star" onclick="star1()"></span>
                    <span id="star2" class="fa fa-star" onclick="star2()"></span>
                    <span id="star3" class="fa fa-star" onclick="star3()"></span>
                    <span id="star4" class="fa fa-star" onclick="star4()"></span>
                    <span id="star5" class="fa fa-star mb-3" onclick="star5()"></span>
                </div>
            </div>
        </section>
        <section>
            <h3 class="text-green text-center fs-titles">Recetas similares</h3>
            <div class="row-card">
               <?php include_once('includes/similar_cards.php'); ?>
            </div>
        </section>
        <section>
            <div class="text-center">
                <img class="img-25 pt-5 pb-5" src="imgInicio/hoja2.png" alt="Hoja decorativa">
            </div>
        </section>
    </main>

    <?php
    include_once 'includes/header.php'
    ?>

    <script src="js/receta.js"></script>
    <script src="js/topNav.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    </body>

    </html>