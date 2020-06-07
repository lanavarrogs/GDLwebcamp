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
                                <a class="invitado-info" href="#invitado<?php echo $invitados['invitado_id'];?>">
                                    <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="imagen invitado"/>
                                    <p><?php echo $invitados['nombre'] . " " . $invitados['apellido']; ?></p>
                                </a>
                          </li>
                          <div style="display:none">
                                <div class="invitado-info invitado-contenido" id="invitado<?php echo $invitados['invitado_id']; ?>">
                                         <h2><?php echo $invitados['nombre'] . " " . $invitados['apellido'];?></h2>
                                         <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="imagen invitado"/>
                                         <p><?php echo $invitados['descripcion']; ?></p>
                                </div>
                          </div>
                <?php }?>
            </ul>
    </section>

    <?php  mysqli_close($conexion) ?>