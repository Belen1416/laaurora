<?php $nameFile = basename(__FILE__); ?>
<!DOCTYPE html>
<html lang="es" translate="no">

<head>
  <?php require_once("includes/header.php"); ?>
</head>

<body>
  <div class="body-inner">

    <?php require_once("includes/topnav.php"); ?>

    <section class="error-404">
      <div class="container text-center">
        <h1 class="error-404__code">404</h1>
        <h2 class="error-404__title">Oops... Página no encontrada</h2>
        <p class="error-404__text">
          Intenta utilizar el botón de abajo para ir a la página principal del sitio.
        </p>
        <a href="/" class="btn btn--primary error-404__btn">
          Volver a la página principal
        </a>
      </div>
    </section>

    <?php require_once("includes/footer.php"); ?>
    <?php require_once("includes/scripts.php"); ?>
  </div>
</body>

</html>
