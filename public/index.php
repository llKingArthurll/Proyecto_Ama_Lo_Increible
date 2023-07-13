<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/jpg" href="../img/Logo_Fondo_Blanco.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/index.css">
  <title>Ama Lo Increíble</title>
</head>

<body>
  <?php include 'header.php' ?>

  <!-- Carrusel de imágenes -->
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicadores -->
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
    </ol>

    <!-- Slides -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/Ama_Lo_Increible_IMG1.jpg" class="d-block w-100" alt="Imagen 1">
      </div>
      <div class="carousel-item">
        <img src="../img/Ama_Lo_Increible_IMG2.jpg" class="d-block w-100" alt="Imagen 2">
      </div>
      <div class="carousel-item">
        <img src="../img/Ama_Lo_Increible_IMG3.jpg" class="d-block w-100" alt="Imagen 3">
      </div>
      <div class="carousel-item">
        <img src="../img/Ama_Lo_Increible_IMG4.jpg" class="d-block w-100" alt="Imagen 4">
      </div>
    </div>

    <!-- Controles -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </a>
  </div>

  <?php include 'footer.php'?>
  <!-- JavaScript de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>