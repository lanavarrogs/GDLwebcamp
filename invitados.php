<?php include_once 'includes/templates/header.php'?>

    <section class="seccion contenedor">
        <h2>Calendario Eventos</h2>

        <?php 

            try {
                require_once('includes/functions/db_conexion.php');
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre, apellido ";
                $sql .= " FROM eventos ";
                $sql .= "INNER JOIN categoria_evento ";
                $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= "INNER JOIN invitados ";
                $sql .= "ON eventos.invitado_id = invitados.invitado_id ";
                $sql .= "ORDER BY evento_id";
                $resultados = $conexion->query($sql);
            } catch (\Exception $e) {
                echo $e->get_Message();
            }
        ?>
        
        


    </section>

    <?php  mysqli_close($conexion) ?>

<?php include_once 'includes/templates/footer.php'?>