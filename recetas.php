<title>Recetas | Veggie Taste</title>
<?php
include_once("includes/bd.php");
include_once 'includes/navbar.php';
?>
<main class="mt-5 p-4 pr-1">
    <div class="row">
        <section class="col-info">
            <section class="card bg-dark text-white border-rad">
                <div class="card-body p-2 align-text">
                    <table class="col-contenido table text-white">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Categoria</th>
                                <th>Ocasión</th>
                                <th>Complejidad</th>
                                <th>Descripcion</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = $database->select("receta_tb", "*");

                            for ($i = 0; $i < count($result); $i++) { ?>
                                <tr>
                                    <td><?php echo $result[$i]['id_receta'] ?></td>
                                    <td class="col-1"><img class="img-perfil" src=<?php echo "imgRecetas/" . $result[$i]['imagen'] ?> alt=""></td>
                                    <td><?php echo $result[$i]['nombre'] ?></td>
                                    <td><?php echo $result[$i]['categoria'] ?></td>
                                    <td><?php echo $result[$i]['ocasion'] ?></td>
                                    <td><?php echo $result[$i]['complejidad'] ?></td>
                                    <td><?php echo $result[$i]['descripcion'] ?></td>
                                    <td>
                                        <a href="editarReceta.php?id_receta=<?php echo $result[$i]['id_receta'] ?>" class="btn btn-secondary">
                                            <!--Editar-->
                                            <i class="far fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="eliminar_receta.php?id_receta=<?php echo $result[$i]['id_receta'] ?>" class="btn btn-danger">
                                        <!--Eliminar-->
                                        <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td> 
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>
    </div>
</main>
</body>

</html>