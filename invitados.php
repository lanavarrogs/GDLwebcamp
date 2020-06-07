<?php include_once 'includes/templates/header.php'?>

    <section class="seccion contenedor">
        <h2>Invitados</h2>

        <?php 

            try {
                require_once('includes/functions/db_conexion.php');
                $sql = "SELECT * FROM invitados";
                $resultados = $conexion->query($sql);
            } catch (\Exception $e) {
                echo $e->get_Message();
            }
        ?>

            <ul class="lista-invitados">
                <?php 
                    $calendario = array();
                    while ($invitados = $resultados->fetch_assoc()) { ?>
                          <li class="invitado">
                              <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="imagen invitado"/>
                              <p><?php echo $invitados['nombre'] . " " . $invitados['apellido']; ?></p>
                          </li>
                          <div style="display.none">
                                <div class="" id="<?php echo $invitados['invitado_id'] ?>">

                                </div>
                          </div>
                <?php }?>
            </ul>
    </section>

    <?php  mysqli_close($conexion) ?>

<?php include_once 'includes/templates/footer.php'?>
