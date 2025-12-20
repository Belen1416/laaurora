<?php
$version = '1.0.4';
$namePage = "";
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$domain = $protocol . $_SERVER['HTTP_HOST'];

switch ($nameFile) {
    case 'index.php':
        $namePage = "Inicio";
        break;
    case 'nosotros.php':
        $namePage = "Nosotros";
        break;
    case 'como-funciona.php':
        $namePage = "Cómo funciona";
        break;
    case 'ayuda.php':
        $namePage = "Ayuda";
        break;
    case 'contacto.php':
        $namePage = "Contacto";
        break;
    case 'libro-de-reclamaciones.php':
        $namePage = "Libro de Reclamaciones";
        break;
    case 'terminos-y-condiciones.php':
        $namePage = "Términos y Condiciones";
        break;
    case 'politica-de-privacidad.php':
        $namePage = "Política de Privacidad";
        break;
    default:
        $namePage = "SrCambio | Casa de cambio online";
        break;
}
?>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>La Aurora - Casa de Cambio</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="/css/style.css" />
<link rel="icon" type="image/png" href="assets/img/logoHeader.png" />

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link rel="stylesheet" href="<?= $domain ?>/css/style.css?v=<?= $version ?>">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

<title><?= $namePage ?> | La Aurora - Casa de Cambio</title>
<link rel="icon" type="image/png" href="<?= $domain ?>/img/logoHeader.png?v=<?= $version ?>">

<meta property="og:type" content="website">
    <meta property="og:title" content="La Aurora | Casa de Cambio Money Exchange en Miraflores">
    <meta property="og:description"
          content="Compra y venta de dólares, euros y otras monedas en Casa de Cambio La Aurora. Oficinas visibles en Miraflores y servicio de cambio delivery.">
    <meta property="og:image" content="<?= $domain ?>/img/logo.png">
    <meta property="og:url" content="<?= $domain ?>/">
    <meta property="og:site_name" content="Casa de Cambio La Aurora">
    <meta property="og:locale" content="es_PE">

    <!-- TWITTER CARDS -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="La Aurora | Casa de cambio en Miraflores">
    <meta name="twitter:description"
          content="Casa de cambio presencial en Miraflores. Tasas competitivas y atención cercana en La Aurora.">
    <meta name="twitter:image" content="<?= $domain ?>/img/logo.png">
