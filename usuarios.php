<title>Usuarios | Veggie Taste</title>
<?php
include_once("includes/bd.php");
include_once 'includes/navbar.php';
?>
<main class=" p-4 pr-1">
    <div class="row">
        <section class="col-info">
            <section class="card text-white border-rad">
                <div class="card-body p-2 align-text">
                    <table class="col-contenido table text-white">
                        <thead>
                            <tr>
                                <th>Foto de perfil</th>
                                <th>Nombre Completo</th>
                                <th>Usuario</th>
                                <th>Correo</th>
                                <th>Perfil</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = $database->select("usuario_tb", "*");

                            for ($i = 0; $i < count($result); $i++) { ?>
                                <tr>
                                    <?php if ($result[$i]['img_perfil'] == null) { ?>
                                        <td class="col-1">No tiene</td>
                                    <?php } else { ?>
                                        <td class="col-1"><img class="img-perfil" src=<?php echo "img-perfil/" . $result[$i]['img_perfil'] ?> alt="Foto de perfil"></td>
                                    <?php } ?>
                                    <td><?php echo $result[$i]['nombre'] ?></td>
                                    <td><?php echo $result[$i]['nombre_usuario'] ?></td>
                                    <td><?php echo $result[$i]['correo'] ?></td>
                                    <td><?php echo $result[$i]['perfil'] ?></td>
                                    <td class="text-center">
                                        <a href="eliminar_usuario.php?nombre_usuario=<?php echo $result[$i]['nombre_usuario'] ?>" class="btn btn-secondary">
                                            <!--Editar-->
                                            <i class="far fa-edit"></i>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="eliminar_usuario.php?nombre_usuario=<?php echo $result[$i]['nombre_usuario'] ?>" class="btn btn-danger">
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