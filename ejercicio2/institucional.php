<?php
require_once("clases/Universidad.php");

$uni = new Universidad("Universidad BDU");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Institucional</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<header>
    <h1><?php echo $uni->obtenerNombre(); ?></h1>
    <nav>
        <a href="menu.php">Inicio</a>
        <a href="carreras.php">Carreras</a>
        <a href="institucional.php">Institucional</a>
    </nav>
</header>

<section class="contenido">
    <h2>Información Institucional</h2>
    <p><?php echo $uni->mostrarInformacion(); ?></p>

    <div class="mision">
        <h3>Misión</h3>
        <p>Formar profesionales competentes con responsabilidad social.</p>
    </div>

    <div class="vision">
        <h3>Visión</h3>
        <p>Ser líderes en educación superior a nivel nacional e internacional.</p>
    </div>
</section>

</body>
</html>