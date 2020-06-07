<?php include_once 'includes/templates/header.php'?>

    <section class="seccion contenedor">
<<<<<<< HEAD
        <h2>Invitados</h2>
=======
        <h2>Calendario Eventos</h2>
>>>>>>> c12877a279672cfae22acf9d590521ce66a27b26

        <?php 

            try {
                require_once('includes/functions/db_conexion.php');
<<<<<<< HEAD
                $sql = "SELECT * FROM invitados";
=======
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre, apellido ";
                $sql .= " FROM eventos ";
                $sql .= "INNER JOIN categoria_evento ";
                $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= "INNER JOIN invitados ";
                $sql .= "ON eventos.invitado_id = invitados.invitado_id ";
                $sql .= "ORDER BY evento_id";
>>>>>>> c12877a279672cfae22acf9d590521ce66a27b26
                $resultados = $conexion->query($sql);
            } catch (\Exception $e) {
                echo $e->get_Message();
            }
        ?>
<<<<<<< HEAD

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
=======
        
        


>>>>>>> c12877a279672cfae22acf9d590521ce66a27b26
    </section>

    <?php  mysqli_close($conexion) ?>

<<<<<<< HEAD
<?php include_once 'includes/templates/footer.php'?>
=======
<?php include_once 'includes/templates/footer.php'?>
>>>>>>> c12877a279672cfae22acf9d590521ce66a27b26
