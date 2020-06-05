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

            <div class="calendario">
                
                <?php 
                    $calendario = array();
                    while ($eventos = $resultados->fetch_assoc()) { 
                            //obtiene la fecha del evento
                            $fecha = $eventos['fecha_evento'];

                            $evento = array(
                                'titulo' => $eventos['nombre_evento'],
                                'fecha' => $eventos['fecha_evento'],
                                'hora' => $eventos['hora_evento'],
                                'categoria' => $eventos['cat_evento'],
                                'icono' => $eventos['icono'],
                                'invitado' => $eventos['nombre'] ." ". $eventos['apellido']  
                            );

                            $calendario[$fecha][] = $evento;
                    }//Fin del while
                ?>
                <?php 
                    //Imprime todos los elementos
                    foreach ($calendario as $dia => $lista_eventos) {?>
                        <h3> 
                            <i class="far fa-calendar-alt"></i>
                            <?php
                                setlocale(LC_TIME,'spanish'); 
                                echo strftime("%A, %d de %B del %Y", strtotime($dia)); 
                            ?>
                        </h3>
                        
                        <div class="contenido-evento">
                            <?php
                            
                                foreach ($lista_eventos as $evento) {?>
                                    <div class="dia">
                                        <p class="titulo">
                                        <?php echo $evento['titulo'] ?>
                                        </p>
                                        <p class="hora">
                                            <i class="far fa-clock"></i> 
                                            <?php echo $evento['fecha'] . " " . $evento['hora'] ?>
                                        </p>
                                        <p class="categoria">
                                            <i class="<?php echo $evento['icono']?>"></i>
                                            <?php echo $evento['categoria'] ?>
                                        </p>
                                        <p>
                                            <i class="fas fa-user"></i>
                                            <?php echo $evento['invitado'] ?>
                                        </p>
                                    </div>
                            
                            <?php } //fin foreach?>
                         </div>       
                   <?php }//fin foreach ?>
            </div><!--Calendario-->
    </section>

    <?php  mysqli_close($conexion) ?>

<?php include_once 'includes/templates/footer.php'?>