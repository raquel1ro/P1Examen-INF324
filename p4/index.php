<?php include('header.php');
session_start();
if (!isset($_SESSION["usuario"])) {
  header("Location: /p4/login.php");
}
?>
<div id="main">

  <h2>BIENVENIDO</h2>
  <center>
    <h4><?php echo $_SESSION["nombre"]; ?></h4>
  </center>

  <div id="lista">
    <div class="parrafo">


      
                <center>
                  <h2 class="title"> Facultad de Ciencias Puras y Naturales</h2>
                 <p>
                    La Universidad Mayor de San Andrés, fue <i>creada en virtud del Decreto Supremo de fecha 25 de octubre de 1830</i>, firmado por el Presidente de la República de Bolivia Mariscal Andrés de Santa Cruz.
                    <br><br>
                    
                    Esta Universidad de La Paz, adquiere su nombre definitivo el 28 de mayo de 1927. Según Decreto emitido en esa fecha esta Casa de Estudios Superiores se denomina, “Universidad Mayor de San Andrés” en homenaje a su fundador.
                    <br>
                    <b>Fuente: La Cátedra Edición Nº 100- Periódico Institucional de la Universidad Mayor de San Andrés </b>

                </p>
                   
                </center>
                <div align="center"><img src="img/personas.png" align="center" height="250px" width="600px"></div>
  </div>
</div>