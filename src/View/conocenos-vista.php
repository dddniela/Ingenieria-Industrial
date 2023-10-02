<?php
require_once("src/Models/Administrativo.php");
$administrativos = new Administrativo();

$coordinador = $administrativos->getCoordinador();
$jefeDepartamento =  $administrativos->getJefeDepartamento();

$imagenJefeDep = $GLOBALS['PATH_DOCENTE'] . $jefeDepartamento['imagen'];
$imagenCoordinador = $GLOBALS['PATH_DOCENTE'] . $coordinador['imagen'];
?>
<!-- Portada -->
<div class="row g-0">
  <div class="position-relative w-100 overflow-hidden">
    <img class="w-100 img-fluid" src="img/banner-conocenos2.webp" alt="" />
    <div class="position-absolute top-50 start-50 translate-middle w-100">
      <div class="d-flex flex-column justify-content-center align-items-center text-center">
        <h1 class="fw-bold text-warning shadow-text">Conócenos</h1>
        <h1 class="fw-bold text-light d-md-flex d-none shadow-text">
          Ingeniería Industrial
        </h1>
      </div>
    </div>
  </div>
</div>
<!-- Fin Portada-->

<!-- Departamento de Industrial -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
  <div class="row px-2 g-0">

    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img class="img-fluid rounded" src="img/conocenos.webp" alt="">
      </div>
    </div>

    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">Departamento de Ingeniería Industrial</h2>
            <div class="sectionSeparator"></div>
          </div>
          <div class="col-12" style="text-align: center;">
            <p style="text-align: justify;"> 
            El Departamento de Ingeniería Industrial cuenta con aulas diseñadas adecuadamente para el 
            desempeño de la actividad educativa; Sala de Antropometría, Sala de Seguridad e Higiene, Sala 
            Digital y Laboratorio de estudio de trabajo.
            Las instalaciones están orientadas para el desarrollo de las competencias necesarias de los 
            estudiantes así como para llevar a cabo un aprendizaje didáctico, desarrollando proyectos y 
            aplicando herramientas de Ingeniería Industrial.
            <br /><br />
            El objetivo principal del
              departamento es poner al alcance de los estudiantes diferentes
              laboratorios para el desarrollo de sus materias
              prácticas y la orientación en los diversos trámites requeridos a
              lo largo de su plan de estudios, como pueden ser la liberación de
              créditos complementarios, servicio social, residencias
              profesionales.
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--Fin Departamento de Industrial -->

<!-- Descripción Jefa/e del departamento -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
  <div class="row px-2 g-0">
    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">
              <?php
              if ($jefeDepartamento) {
                echo $jefeDepartamento['nombre'];;
              }
              ?>
            </h2>
            <div class="sectionSeparator"></div>
            <h4 class="text-center fw-bold fs-3">
              <?php
              if ($jefeDepartamento) {
                echo"Jefa del Departamento de Ingeniería Industrial";
              }
              ?>
            </h4>
          </div>
          <div class="col-12" style="text-align: center;">
            <p class="" style="text-align: justify">
              <?php
              if ($jefeDepartamento) {
                echo $jefeDepartamento['descripcion'];
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
      <img class="img-fluid rounded" src='<?php if ($jefeDepartamento)  echo $imagenJefeDep; ?>' alt="">
      </div>
    </div>

  </div>
</section>
<!--Fin Descripción Jefa/e del departamento -->

<!-- Descripción Coordinador -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
  <div class="row px-2 g-0">

    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
      <img class="img-fluid rounded" src='<?php if ($coordinador) echo $imagenCoordinador; ?>' alt="">
      </div>
    </div>

    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">
              <?php
              if ($coordinador) {
                echo $coordinador['nombre'];
              }
              ?>
            </h2>
            <div class="sectionSeparator"></div>
            <h4 class="text-center fw-bold fs-3">
              <?php
              if ($coordinador) {
                echo "Coordinador de Ingeniería Industrial";
              }
              ?>
            </h4>
          </div>
          <div class="col-12 px-4" style="text-align: center;">
            <p class="" style="text-align: justify">
              <?php
              if ($coordinador) {
                echo $coordinador['descripcion'];
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--Fin Descripción Coordinador -->


<!-- Instalaciones -->
<div class="bg-primary pt-5"></div>
<section class="seccionInstalaciones bg-dark">
  <div class="row px-2 g-0">
    <div class="col-lg-6 col-12 py-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="tituloSeccionOscura text-center font-bold m-3">
              Instalaciones
            </h2>
            <div class="separadorSeccionOscura"></div>
            <h4 class="text-center text-light fw-bold fs-3">
              Sala de Antropometría
            </h4>
          </div>
          <div class="col-12">
            <h6 class="text-center text-warning fw-bold fs-6">
              “El verdadero progreso es el que pone la tecnología al alcance de
              todos.”<br />
            </h6>

            <p class="text-light" style="text-align: justify">
              El departamento de ingeniería industrial cuenta con una sala de Antropometría en dónde los estudiantes podrán utilizar equipo que les permita realizar la medición y estudio de las dimensiones físicas del cuerpo humano, como altura, peso, longitud de extremidades, para comprender la variabilidad y aplicarla en diferentes campos, como diseño ergonómico o salud.
              <br /><br />
              La sala de Antropometría está orientada a servir como
              herramientas de aprendizaje y apoyo didáctico tanto para los
              docentes como los alumnos.
            </p>
            <div class="justify-content-center text-center">
              <p><a class="btn-warning w-auto btn font-bold" target="_blank" href="https://tinyurl.com/yn5bebvp">
                  Reglamento</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-12 p-2 d-flex justify-content-center align-items-center">
      <!-- Galería con modal para laboratorios-->
      <div class="contenedor-galeria bg-dark">
        <div class="row">
          <div class="col-lg-6">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage1">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/antropometria-1.webp" alt="" />
            </a>
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage2">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/antropometria-2.webp" alt="" />
            </a>
          </div>

          <div class="col-lg-6">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage3">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/antropometria-3.webp" alt="" />
            </a>
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage4">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/antropometria-4.webp" alt="" />
            </a>
          </div>
        </div>
      </div>
      <!-- Fin Galería con modal para laboratorios -->
    </div>
  </div>
</section>
<!--Fin Instalaciones-->

<!-- Modals de la galería-->
<!-- Imagen 1 -->
<div tabindex="-1" aria-labelledby="modalImage3" aria-hidden="true" class="modal fade" id="modalImage1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/antropometria-1.webp" alt="" />
    </div>
  </div>
</div>

<!-- Imagen 2 -->
<div tabindex="-1" aria-labelledby="modalImage4" aria-hidden="true" class="modal fade" id="modalImage2">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/antropometria-2.webp" alt="" />
    </div>
  </div>
</div>

<!-- Imagen 3 -->
<div tabindex="-1" aria-labelledby="modalImage5" aria-hidden="true" class="modal fade" id="modalImage3">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/antropometria-3.webp" alt="" />
    </div>
  </div>
</div>

<!-- Imagen 4 -->
<div tabindex="-1" aria-labelledby="modalImage6" aria-hidden="true" class="modal fade" id="modalImage4">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/antropometria-4.webp" alt="" />
    </div>
  </div>
</div>
<!-- Fin Modals de la galería-->

<!-- Sala de Seguridad e Higiene -->
<div class="bg-primary pt-5"></div>
<section class="seccionInstalaciones bg-dark p-2">
  <div class="row px-2 g-0">
    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img src="img/higiene.webp" class="img-fluid rounded" alt="" />
      </div>
    </div>

    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="tituloSeccionOscura text-center font-bold m-3">
              Sala de Seguridad e Higiene
            </h2>
            <div class="separadorSeccionOscura"></div>
          </div>
          <div class="col-12">
            <p class="text-light" style="text-align: justify">
              La sala de seguridad e higiene cuenta con equipo y herramientas que tienen la finalidad de proteger a los trabajadores y crear un entorno laboral seguro y saludable, evitando accidentes y enfermedades relacionadas con el trabajo.
            </p>
          </div>
          <div class="justify-content-center text-center">
              <p>
                <a class="btn-warning w-auto btn font-bold" target="_blank" href="https://tinyurl.com/3ask8399">Reglamento</a>
              </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Sala digital -->
<div class="bg-primary pt-5"></div>
<section class="seccionInstalaciones bg-dark p-2">
  <div class="row px-2 g-0">
    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="tituloSeccionOscura text-center font-bold m-3">
              Sala Digital
            </h2>
            <div class="separadorSeccionOscura"></div>
          </div>
          <div class="col-12">
            <p class="text-light" style="text-align: justify">
              La Sala Digital cuenta con equipo de cómputo en dónde los estudiantes podrán desempeñarse en desarrollar diversos programas, aplicaciones y proyectos a lo largo de sus clases prácticas en la carrera de ingeniería industrial
            </p>
          </div>
          <div class="justify-content-center text-center">
              <p>
                <a class="btn-warning w-auto btn font-bold" target="_blank" href="https://tinyurl.com/5aad2j2j">Reglamento</a>
              </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img src="img/saladigital.webp" class="img-fluid rounded" alt="" />
      </div>
    </div>
 </div>
</section>

<div class="bg-primary pt-5"></div>
<section class="seccionInstalaciones bg-dark p-2">
  <div class="row px-2 g-0">
    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img src="img/estudiotrabajo.webp" class="img-fluid rounded" alt="" />
      </div>
    </div>

    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="tituloSeccionOscura text-center font-bold m-3">
              Laboratorio de Estudio del Trabajo
            </h2>
            <div class="separadorSeccionOscura"></div>
          </div>
          <div class="col-12">
            <p class="text-light" style="text-align: justify">
              El laboratorio de Estudio del Trabajo tiene como función principal el auxiliar a los estudiantes en la disciplina que analiza y optimiza la eficiencia de las tareas de producción. Consiste en observar, medir y analizar cada paso de un proceso para identificar ineficiencias y luego desarrollar mejoras en la línea de producción, aumentando la productividad y reduciendo costos.
            </p>
          </div>
          <div class="justify-content-center text-center">
              <p>
                <a class="btn-warning w-auto btn font-bold" target="_blank" href="https://tinyurl.com/3ask8399">Reglamento</a>
              </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--
<div class="bg-primary pt-5"></div>
<div class="p-4 text-center">
  <h5 class="font-bold">Autores de la página:</h5>
  <p class="font-semibold">Estudiantes de la Generación 2018 - 2023</p>
  <p>Gabriel Escobar Medina, Nancy Daniela Mendez Arpidez, Marco Gabriel Cortés Toledo, Yelitza Magali Rosas Jiménez y Daniela Castro Rodriguez</p>
</div>

<div class="p-4 text-center">
  <h5 class="font-bold">Agradecimientos</h5>
  <p class="justify-content-center">Eric Manuel Montalvo Cruz, Ivan de Jesús Agame Malpica, Susana María Hernández Molina, Rocío Marcela Ramirez Hernández, Alessandra Ortega Caballero, María Fernanda Ramírez Vicente, Sandy Estela Barragán Guerrero, Laura Alejandra Díaz Contreras y Fernando Martinez</p>
</div>
            -->
<!-- Fin Laboratorio de -->