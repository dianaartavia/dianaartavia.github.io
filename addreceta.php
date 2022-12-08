<title>Agregar receta | Veggie Taste</title>
<?php
include_once 'includes/navbar.php';
?>


<main>
    <div class="row">
        <div class="col-info mt-5">
            <h1 class="text-green mt-5 ml-5 mb-5">Nueva receta</h1>
        </div>
    </div>
    <form class="margin-form" action="guardar_receta.php" method="post" enctype="multipart/form-data">
        <div class="row mb-4">
            <div class="col-4">
                <input class="form-item" type="text" name="nombre" placeholder="Nombre de la receta" required>
            </div>
            <div class="col-4">
                <input class="form-item" accept=".png, .jpg" type="file" name="imagen" required>
            </div>
            <div class="col-4">
                <input class="form-item" type="text" name="preparacion" placeholder="Tiempo de preparación" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-4">
                <input class="form-item" type="text" name="coccion" placeholder="Tiempo de cocción" required>
            </div>
            <div class="col-4">
                <input class="form-item" type="text" name="tiempoTotal" placeholder="Tiempo total" required>
            </div>
            <div class="col-4">
                <input class="form-item" type="text" name="porciones" placeholder="Porciones" required>
            </div>
        </div>
        <div class="row mb-5 pb-2">
            <div class="col-4">
                <select class="form-item selectores" id="categoria" name="categoria" required>
                    <option>Categoría</option>
                    <option>Desayuno</option>
                    <option>Bebidas</option>
                    <option>Entradas</option>
                    <option>Almuerzo</option>
                    <option>Postres</option>
                    <option>Sopas</option>
                </select>
            </div>
            <div class="col-4">
                <select class="form-item selectores" id="complejidad" name="complejidad" required>
                    <option>Nivel de complejidad</option>
                    <option>Fácil</option>
                    <option>Intermedio</option>
                    <option>Avanzado</option>
                </select>
            </div>
            <div class="col-4">
                <select class="form-item selectores" id="ocasion" name="ocasion" required>
                    <option>Ocasión</option>
                    <option>Todas</option>
                    <option>Cumpleaños</option>
                    <option>Día del padre</option>
                    <option>Día de la madre</option>
                    <option>Día del niño</option>
                    <option>Navidad</option>
                    <option>Semana Santa</option>
                    <option>Verano</option>
                </select>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-6">
                <textarea class="text-area" name="descripcion" id="descripcion" placeholder="Descripcion" cols="30" rows="10" maxlength="1500" required></textarea>
            </div>
            <div class="col-6">
                <textarea class="text-area" name="ingredientes" id="ingredientes" placeholder="Ingredientes" cols="30" rows="10" maxlength="1000" required></textarea>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <textarea class="text-area1" name="instrucciones" id="instrucciones" placeholder="Instrucciones para la preparación" cols="30" rows="10" maxlength="3000" required></textarea>
            </div>
        </div>
        <div class="row text-center  mb-5 pb-5">
            <div class="col-12">
                <input class="btn-submit" type="submit" value="Publicar" name="guardar_receta">
            </div>
        </div>
    </form>


    </div>
</main>