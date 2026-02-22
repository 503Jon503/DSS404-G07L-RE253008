<?php
require_once("clases/Universidad.php");

$uni = new Universidad("Universidad BDU");
$carreras = $uni->mostrarCarreras();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Carreras</title>
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
    <h2>Carreras Disponibles</h2>

    <table>
        <tr>
            <th>Carrera</th>
            <th>Duración</th>
        </tr>

        <?php
        foreach ($carreras as $nombre => $duracion) {
            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$duracion</td>";
            echo "</tr>";
        }
        ?>
    </table>

</section>

</body>
</html>