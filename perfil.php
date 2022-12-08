<title>Perfil | Veggie Taste</title>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/utils.css">
<link rel="stylesheet" href="css/perfil.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/receta.css">

<?php
include_once 'includes/header.php';
?>


<main>
    <section class="row mb-4 pb-4 text-user gap-4">
        <div class="col-4 img-pos">
            <div class="img-circular">
                <img src="img-perfil/photo5093654694651340815.jpg" alt="Foto del usuario">
            </div>
            <button class="mt-3 btn-foto" id="cambiarFoto">Cambiar foto</button>
            <div id="modal" class="modal">
                <div class="modal-content text-center">
                    <span class="close">&times;</span>
                    <form action="" method="post">
                        <input class="font-family" type="file">
                        <input class="btn-sesion btn-submit" type="submit" value="Aceptar">
                    </form>
                </div>

            </div>
        </div>
        <div class="col-7">
            <h3 class="pos-text mb-5"><?php echo $_GET['nombre_usuario'] ?> @nombre_usuario </h3>
            <a class="btn-sesion" href="login.html">Cerrar sesión</a>
        </div>
    </section>
    <section class="row text-center mb-3">
        <div class="col ">
            <img class="img-30" src="imgInicio/remolacha.png" alt="Remolacha">
        </div>
    </section>
    <section class="row mb-1">
        <div class="col text-center">
            <h3 class="title-fav"> Favoritas </h3>
        </div>
    </section>

    <!-- Cards-->
    <section>
    <div class="row-card">
                <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                    <div class="card">
                        <img class="img-100 m-auto" src="imgInicio/slide15.png" alt="">
                        <h3 class="pb-4 pt-3">Receta</h3>
                        <a class="btn-card" href="receta.php">Ver</a>
                        <img class="img-favorite" src="imgInicio/fav.png" alt="Guardar en favoritos">
                    </div>
                </div>
                <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                    <div class="card">
                        <img class="img-100 m-auto" src="imgInicio/slide15.png" alt="">
                        <h3 class="pb-4 pt-3">Receta</h3>
                        <a class="btn-card" href="receta.php">Ver</a>
                        <img class="img-favorite" src="imgInicio/fav.png" alt="Guardar en favoritos">
                    </div>
                </div>
                <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                    <div class="card">
                        <img class="img-100 m-auto" src="imgInicio/slide15.png" alt="">
                        <h3 class="pb-4 pt-3">Receta</h3>
                        <a class="btn-card" href="receta.php">Ver</a>
                        <img class="img-favorite" src="imgInicio/fav.png" alt="Guardar en favoritos">
                    </div>
                </div>
                <div class="column" data-aos="fade-in" data-aos-delay="300" data-aos-offset="0">
                    <div class="card">
                        <img class="img-100 m-auto" src="imgInicio/slide15.png" alt="">
                        <h3 class="pb-4 pt-3">Receta</h3>
                        <a class="btn-card" href="receta.php">Ver</a>
                        <img class="img-favorite" src="imgInicio/fav.png" alt="Guardar en favoritos">
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="text-center">
            <img class="img-25 pt-5 pb-5" src="imgInicio/hoja1.png" alt="Hoja decorativa">
        </div>
    </section>
</main>

<?php
include_once 'includes/footer.php'
?>

<script src="./js/topNav.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="js/perfil.js"></script>