<title>Buscar | Veggie Taste</title>
<link rel="stylesheet" href="css/buscar.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/utils.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/buscar.css">
<?php
include_once('includes/bd.php');
include_once 'includes/header.php';
?>

<main>
    <form action="" method="post">
        <section class="text-center mb-5">
            <h1 class="text-green first-title pb-4">Resultados para:</h1>
            <input class="form-item" type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
            <img class="pos-abs icon-search" src="imgInicio/search1.png" alt="Icono buscar">
            <p class="mt-4">Sugerencias: <span id="txtHint"></span></p>
        </section>
        <section class="row text-center mb-5">
            <div class="col-12">
                <h3 class="text-green second-title pb-4">Buscar por:</h3>
            </div>
            <div class="column-search pb-3">
                <select class="form-items text-gray" id="categoria" name="categoria">
                    <option selected>Categoría</option>
                    <option>Desayuno</option>
                    <option>Bebidas</option>
                    <option>Entradas</option>
                    <option>Almuerzo</option>
                    <option>Postres</option>
                    <option>Sopas</option>
                </select>
            </div>
            <div class="column-search pb-3">
                <select class="form-items text-gray" id="complejidad" name="complejidad">
                    <option selected>Complejidad</option>
                    <option>Fácil</option>
                    <option>Intermedio</option>
                    <option>Avanzado</option>
                </select>
            </div>
            <div class="column-search pb-3">
                <select class="form-items text-gray" id="ocasion" name="ocasion">
                    <option selected>Ocasión</option>
                    <option>Todas</option>
                    <option>Cumpleaños</option>
                    <option>Cumpleaños</option>
                    <option>Día de la madre</option>
                    <option>Día del niño</option>
                    <option>Navidad</option>
                    <option>Semana Santa</option>
                    <option>Verano</option>
                </select>
            </div>
            <div class="col-12">
                <button class="btn-buscar mt-3" name="buscar" type="submit">Buscar</button>
            </div>

        </section>
    </form>
    <section>
        <div class="row-card">
            <?php //include_once("includes/buscar_cards.php"); 
            ?>
            <?php
            if (isset($_POST["buscar"])) {

                $nombre = $_POST['fname'];
                $categoria = $_POST['categoria'];
                $complejidad = $_POST['complejidad'];
                $ocasion = $_POST['ocasion'];

$result = $database -> select("receta_tb", "**", ["categoria" => '$categoria']);

                if ($categoria == "Bebidas" || $categoria == "Postres" || $categoria == "Almuerzo" || $categoria == "Sopas" || $categoria == "Entradas" || $categoria == "Desayuno") {

                    

                   echo $categoria;
                  /*  for ($i = 0; $i < count($result); $i++) {
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
                    }//fin del for*/
                }
            } //fin del if(isset($_POST["buscar"]))
            ?>

        </div>
    </section>
    <section>
        <div class="text-center">
            <img class="img-25 pt-5 pb-5" src="imgInicio/hoja3.png" alt="Hoja decorativa">
        </div>
    </section>
</main>

<?php
include_once 'includes/footer.php'
?>

<script src="js/topNav.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/showHint.js"></script>
<script>
    AOS.init();
</script>