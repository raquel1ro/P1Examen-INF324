<?php include('header.php'); 
session_start();
if (!isset($_SESSION["usuario"])) {
  header("Location: /p3/login.php");
}
?>


<div id="carrera">
    <br>
    <h2>
        FCPN - CARRERA DE MATEMÁTICA
    </h2>
    <center>
        <img src="img/matematica.jfif" height="100px" alt="">
    </center>

    <div id="descripcion">

        <div class="parrafo">

            <h2>MISIÓN</h2>
            <p align="left">
                La Carrera de Matemática de la UMSA, posee un nivel académico de excelencia, forma profesionales e investigadores, comprometidos con la sociedad y sus necesidades; orientados a la creación de conocimientos mediante los enfoques de la Matemática pura y aplicada, que respondan a los retos científicos y tecnológicos de la sociedad, enfatizando en la formación integral orientada al desarrollo y la creación de conocimientos matemáticos en las áreas de la Matemática Pura y Aplicada, para lograr la transformación del país con responsabilidad social y contribuyendo a su desarrollo sostenible.
            </p>
        </div>
        <div class="parrafo">
            <h2>VISIÓN</h2>
            <p align="left">
                Ser la Carrera líder a nivel nacional que forme egresados competitivos o cualificados con calidad académica, para ser aceptados en el mercado laboral; con docentes de excelente nivel académico, planes y programas de estudio vigentes diseñados bajo estándares internacionales, para desarrollar aptitudes y habilidades matemáticas aportando al progreso científico y tecnológico en el marco de la ética profesional, la superación individual y colectiva para el progreso educativo del país.
            </p>
        </div>
    </div>
</div>