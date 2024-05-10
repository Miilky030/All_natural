<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Acerca de nosotros</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">
   <div class="presentation-card">
      <div class="card-content">
         <h2>Quiénes Somos</h2>
        <p>En All Natural nos apasiona el cuidado del cabello y la salud del planeta. Somos una empresa pionera en la fabricación y comercialización de productos ecológicos y orgánicos para el cuidado capilar, bajo la más alta calidad y estándares de sostenibilidad.<br>

         <br>Nuestra misión es ofrecer soluciones naturales que brinden resultados visibles y duraderos, respetando la salud natural del cabello. Utilizamos ingredientes de origen vegetal cuidadosamente seleccionados y cultivados de forma sostenible, y nos comprometemos con prácticas de producción responsables que minimizan el impacto ambiental.<br>
         
         <br>Creemos que la belleza real proviene de la salud y la armonía con el medio ambiente. Por eso, All Natural no es solo una marca de productos capilares, sino un estilo de vida consciente y sostenible.</p><br>
         <a href="about.php" class="btn">Nuestros Productos</a>
      </div>
   </div>
   <!-- Resto del contenido de la sección about -->
</section>



<section class="reviews">

   <div class="box-container">

      <div class="box">
         <img src="images/icons/objetivo.png" alt="">
         <h3>Misión</h3>
         <p>Nuestra misión en All Natural es crear productos de cuidado capilar ecológicos y orgánicos que promuevan la salud del cabello y del planeta. Nos comprometemos a utilizar ingredientes naturales de alta calidad y materiales reciclados para reducir el impacto ambiental y ofrecer una experiencia de cuidado capilar que sea amigable con el medio ambiente.</p>
      </div>

      <div class="box">
         <img src="images/icons/vision.png" alt="">
         <h3>Visión</h3>
         <p>Nos esforzamos por convertirnos en líderes reconocidos en la industria del cuidado capilar, generando ganancias sostenibles mientras ofrecemos productos innovadores y un servicio excepcional. Visualizamos un futuro en el que All Natural sea sinónimo de excelencia en el cuidado capilar y un modelo a seguir en términos de sostenibilidad y responsabilidad ambiental.</p>
      </div>

      <div class="box">
         <img src="images/icons/valores.png" alt="">
         <h3>Nuestros Valores</h3>
         <p>En All Natural, nuestros valores son nuestra guía.</p><br>
         <p>
            <span class="value">Sostenibilidad</span><br>
            <span class="value">Calidad</span><br>
            <span class="value">Innovación</span><br>
            <span class="value">Empatía</span><br>
            <span class="value">Transparencia</span><br>
            <span class="value">Compromiso</span>
         </p>
   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>