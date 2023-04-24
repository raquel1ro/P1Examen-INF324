<?php include('header.php'); 

session_start();
if (!isset($_SESSION["usuario"])) {
  header("Location: /p3/login.php");
}
?>



<div id="carrera">
    <h2>
        <br>
        FCPN - CARRERA DE FISÍCA
    </h2>
    <center>
        <img src="img/fisica1.jpg" height="180px" width="350px"  alt="">
    </center>

    <div id="descripcion">

        <div class="parrafo">

            <h2>MISIÓN</h2>
            <p align="left">
                La Carrera de Física comparte sustancialmente la misión, visión y objetivos de la Universidad Boliviana, los de la UMSA y los de la FCPN. No obstante, tiene como misión propia y fundamental la de formar y entrenar recursos humanos de alto nivel, especializados en la investigación científica, la docencia y la aplicación de conocimientos en todas las áreas de la física. Crear y difundir conocimiento en física o relacionado con la física, Comando y contribuyendo para la formación de profesionales críticos, independientes y capacitados tanto a nivel de pregrado como de posgrado. Estos profesionales deberán ser capaces de contribuir al desarrollo científico y tecnológico, como consecuencia al mejoramiento de las condiciones sociales y económicas del país.
            </p>
        </div>
        <div class="parrafo">
            <h2>VISIÓN</h2>
            <p align="left">
                La visión de la Carrera es la de constituirse en un centro de excelencia en Física con capacidades plenas para ingresar competitivamente en el ámbito científico a nivel regional y mundial.
            </p>
        </div>
    </div>
</div>