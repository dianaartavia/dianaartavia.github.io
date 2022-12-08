<title>Inicio | Veggie Taste</title>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/utils.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/slideshow.css">

<?php
include_once 'includes/header.php';
?>

<main>
    <!--imagenes animadas-->
    <section class="row margin-l">
        <div class="col-4 mrg-1" data-aos="fade-up" data-aos-duration="3000">
            <img class="img-header m-auto" src="imgInicio/Fondo1.png" alt="Imagen decorativa" />
        </div>
        <div class="col-4 mrg-2" data-aos="fade-up" data-aos-duration="2000">
            <img class="img-header m-auto" src="imgInicio/Fondo2.png" alt="Imagen decorativa" />
        </div>
        <div class="col-4 mrg-3" data-aos="fade-up" data-aos-duration="3000">
            <img class="img-header m-auto" src="imgInicio/Fondo3.png" alt="Imagen decorativa" />
        </div>
    </section>

    <section class="text-center">
        <img class="img-25 mt-5" src="imgInicio/hoja3.png" alt="Hoja decorativa" />
    </section>
    <section>
        <div class="row">
            <div class="col-3"><img class="vegetal-izquierda" src="./imgInicio/zanahoria.png" alt="Elemento decorativo"></div>
            <div class="col-6">
                <h3 class="text-green title-main">Mejor valoradas</h3>
            </div>
            <div class="col-3">
                <div class="text-center"><img class="vegetal-derecha" src="./imgInicio/remolacha.png" alt="Elemento decorativo"></div>
            </div>
        </div>
    </section>
    <!--Slideshow con las recetas mas votadas-->
    <section class="mt-3">
        <div class="slideshow-container">
            <!-- imagenes con numero y nombre de la receta -->
            <div class="mySlides fade">

                <img src="imgInicio/slide1.jpg" style="width:100%">
                <div><a class="link-slides text" href="receta.html">Receta</a></div>
            </div>

            <div class="mySlides fade">
                <img src="imgInicio/slide3.png" style="width:100%">
                <div><a class="link-slides text" href="receta.html">Receta</a></div>
            </div>

            <div class="mySlides fade">
                <img src="imgInicio/slide12.png" style="width:100%">
                <div><a class="link-slides text" href="receta.html">Receta</a></div>
            </div>

            <div class="mySlides fade">
                <img src="imgInicio/slide4.png" style="width:100%">
                <div><a class="link-slides text" href="receta.html">Receta</a></div>
            </div>

            <div class="mySlides fade">
                <img src="imgInicio/slide6.png" style="width:100%">
                <div><a class="link-slides text" href="receta.html">Receta</a></div>
            </div>

            <div class="mySlides fade">
                <img src="imgInicio/slide5.png" style="width:100%">
                <div><a class="link-slides text" href="receta.html">Receta</a></div>
            </div>

            <div class="mySlides fade">
                <img src="imgInicio/slide8.png" style="width:100%">
                <div><a class="link-slides text" href="receta.html">Receta</a></div>
            </div>

            <div class="mySlides fade">
                <img src="imgInicio/slide.7.png" style="width:100%">
                <div><a class="link-slides text" href="receta.html">Receta</a></div>
            </div>

            <div class="mySlides fade">
                <img src="imgInicio/slide11.png" style="width:100%">
                <div><a class="link-slides text" href="receta.html">Receta</a></div>
            </div>

            <div class="mySlides fade">
                <img src="imgInicio/slide2.jpg" style="width:100%">
                <div><a class="link-slides text" href="receta.html">Receta</a></div>
            </div>

            <!-- botones siguiente y anterior-->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- dots/circulos-->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span>
            <span class="dot" onclick="currentSlide(10)"></span>
        </div>
    </section>

    <!--Seccion de recetas-->
    <section class="mt-5">
        <section class="text-center">
            <img class="img-25 mt-5" src="imgInicio/hoja2.png" alt="Hoja decorativa" />
        </section>
        <div class="row">
            <div class="col">
                <h3 class="text-green title-main">Recetas</h3>
            </div>
        </div>
    </section>
    <section>
        <div class="row-card">
            <?php include("includes/cards.php"); ?>
        </div>
    </section>

</main>

<?php
include_once 'includes/footer.php';
?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="./js/home.js"></script>
<script src="js/topNav.js"></script>