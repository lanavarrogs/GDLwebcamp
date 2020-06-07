<?php  include_once 'includes/templates/header.php' ?>
    <section class="seccion contenedor">
        <h2>La mejor conferencia de diseño web en español</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
          Distinctio similique animi nostrum eligendi facere nemo provident iusto, 
          optio enim porro fuga ut assumenda saepe sint repellat debitis soluta eius
          voluptas.
        </p>
    </section><!--seccion-->

    <section class="programa">
      <div class="contenedor-video">
        <video autoplay loop poster="./img/bg-talleres.jpg">
          <source src="./video/video.mp4" type="video/mp4"/>
          <source src="./video/video.webm" type="video/webm"/>
          <source src="./video/video.ogv" type="video/ogv"/>
        </video>
      </div><!--contenedorvideo-->

      <div class="contenido-programa">
        <div class="contenedor">
          <div class="programa-evento">
            <h2>Programa del evento</h2>
            <nav class="menu-programa">
              <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
              <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
              <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
            </nav>

            <div id="talleres" class="info-curso ocultar clearfix">
                <div class="detalle-evento">
                  <h3>Html5, Css3 y Javascript </h3>
                  <p><i class="far fa-clock"></i>16:00 hrs</p>
                  <p><i class="far fa-calendar-alt"></i>10-Dic</p>
                  <p><i class="fas fa-user"></i>Luis Angel Navarro Parra</p>
                </div>
                <div class="detalle-evento">
                  <h3>Responsive Web Design </h3>
                  <p><i class="far fa-clock"></i>20:00 hrs</p>
                  <p><i class="far fa-calendar-alt"></i>10-Dic</p>
                  <p><i class="fas fa-user"></i>Luis Angel Navarro Parra</p>
                </div>
                <div class="fd">
                  <a href="#" class="button">Ver Todos</a>
                </div>
            </div><!--Talleres-->
            <div id="conferencias" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Como ser freelancer </h3>
                <p><i class="far fa-clock"></i>10:00 hrs</p>
                <p><i class="far fa-calendar-alt"></i>10-Dic</p>
                <p><i class="fas fa-user"></i>Gregorio Sanchez</p>
              </div>
              <div class="detalle-evento">
                <h3>Tecnologias del futuro</h3>
                <p><i class="far fa-clock"></i>17:00 hrs</p>
                <p><i class="far fa-calendar-alt"></i>10-Dic</p>
                <p><i class="fas fa-user"></i>Susan Sanchez</p>
              </div>
              <div class="fd">
                <a href="#" class="button">Ver Todos</a>
              </div>
          </div><!--Conferencias-->
          <div id="seminarios" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Diseño UI para moviles </h3>
              <p><i class="far fa-clock"></i>17:00 hrs</p>
              <p><i class="far fa-calendar-alt"></i>11-Dic</p>
              <p><i class="fas fa-user"></i>Harold Garcia</p>
            </div>
            <div class="detalle-evento">
              <h3>Aprende a programar en una mañana </h3>
              <p><i class="far fa-clock"></i>10:00 hrs</p>
              <p><i class="far fa-calendar-alt"></i>11-Dic</p>
              <p><i class="fas fa-user"></i>Susana Rivera</p>
            </div>
            <div class="fd">
              <a href="#" class="button">Ver Todos</a>
            </div>
        </div><!--Seminarios-->
          </div><!--prograEvento-->
        </div><!--contenedor-->
      </div><!--contenidoPrograma-->
    </section><!--programa-->

    <section class="invitados contenedor seccion">
        <h2>Invitados</h2>
        <ul class="lista-invitados">
          <li class="invitado">
              <img src="img/invitado1.jpg" alt="imagen invitado"/>
              <p>Rafael Bautista</p>
          </li>
          <li class="invitado">
            <img src="img/invitado2.jpg" alt="imagen invitado"/>
            <p>Shari Herrera</p>
          </li>
          <li class="invitado">
            <img src="img/invitado3.jpg" alt="imagen invitado"/>
            <p>Gregorio Sanchez</p>
          </li>
          <li class="invitado">
            <img src="img/invitado4.jpg" alt="imagen invitado"/>
            <p>Susana Rivera</p>
          </li>
          <li class="invitado">
            <img src="img/invitado5.jpg" alt="imagen invitado"/>
            <p>Harold Garcia</p>
          </li>
          <li class="invitado">
            <img src="img/invitado6.jpg" alt="imagen invitado"/>
            <p>Susan Sanchez</p>
          </li>
        </ul>
    </section>


    <div class="contador parallax">
      <div class="contenedor">
          <ul class="resumen-evento">
            <li><p class="numero"></p>Invitados</li>
            <li><p class="numero"></p>Talleres</li>
            <li><p class="numero"></p>Dias</li>
            <li><p class="numero"></p>Conferencias</li>
          </ul>
      </div>
    </div><!--contador-->


    <section class="seccion precios">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios">
              <li>
                 <div class="tabla-precio">
                   <h3>Pase por dia</h3>
                   <p class="numero">$30</p>
                   <ul>
                     <li>Bocadillos Gratis</li>
                     <li>Todas las conferencias</li>
                     <li>Todos los talleres</li>
                   </ul>
                   <div class="btn-compra">
                    <a href="#" class="button hollow">Comprar</a>
                  </div>
                 </div>
              </li>
              <li>
                <div class="tabla-precio">
                  <h3>Todos los dias</h3>
                  <p class="numero">$50</p>
                  <ul>
                    <li>Bocadillos Gratis</li>
                    <li>Todas las conferencias</li>
                    <li>Todos los talleres</li>
                  </ul>
                  <div class="btn-compra">
                    <a href="#" class="button">Comprar</a>
                  </div>
                </div>
             </li>
             <li>
              <div class="tabla-precio">
                <h3>Pase por 2 dias</h3>
                <p class="numero">$45</p>
                <ul>
                  <li>Bocadillos Gratis</li>
                  <li>Todas las conferencias</li>
                  <li>Todos los talleres</li>
                </ul>
                <div class="btn-compra">
                  <a href="#" class="button hollow">Comprar</a>
                </div>
              </div>
             </li>
            </ul>
        </div><!--contenedor-->
    </section><!--Precios-->

    <div id="mapa" class="mapa"></div>

    <section class="seccion">
      <h2>Testimoniales</h2>
      <div class="contenedor">
        <div class="testimoniales">
          <div class="testimonial">
            <blockquote>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia saepe amet illo labore at eligendi deleniti sunt culpa, dolorum sequi, enim voluptate repudiandae neque aut inventore, quisquam natus eveniet quaerat.</p>
              <footer class="info-testimonial">
                <img src="img/testimonial.jpg" alt="Imagen testimonial">
                <cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>
              </footer>
            </blockquote>
          </div>

          <div class="testimonial">
            <blockquote>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia saepe amet illo labore at eligendi deleniti sunt culpa, dolorum sequi, enim voluptate repudiandae neque aut inventore, quisquam natus eveniet quaerat.</p>
              <footer class="info-testimonial">
                <img src="img/testimonial.jpg" alt="Imagen testimonial">
                <cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>
              </footer>
            </blockquote>
          </div><!--testimonial-->
          <div class="testimonial">
            <blockquote>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia saepe amet illo labore at eligendi deleniti sunt culpa, dolorum sequi, enim voluptate repudiandae neque aut inventore, quisquam natus eveniet quaerat.</p>
              <footer class="info-testimonial">
                <img src="img/testimonial.jpg" alt="Imagen testimonial">
                <cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>
              </footer>
            </blockquote>
          </div><!--testimonial-->
      </div><!--Testimoniales-->
      </div><!--ContenedorTestimoniales-->
    </section><!--Testimoniales-->

    <div class="newsletter parallax">
      <div class="contenido contenedor">
        <p>Registrate al newsletter</p>
        <h3>gdlwebcamp</h3>
        <div class="boton">
          <a href="#" class="button transparent">Registro</a>
        </div>
      </div><!--contenido-->
    </div><!--newsletter-->

    <section class="seccion">
      <h2>Faltan</h2>
      <div class="cuenta-regresiva contenedor">
        <ul>
          <li><p id="dias" class="numero"></p>dias</li>
          <li><p id="horas" class="numero"></p>horas</li>
          <li><p id="minutos" class="numero"></p>minutos</li>
          <li><p id="segundos" class="numero"></p>segundos</li>
        </ul>
      </div><!--cuentaRegresiva-->
    </section><!--seccionCuentaRegresiva-->

    <?php  include_once 'includes/templates/footer.php' ?>
</body>
</html>
