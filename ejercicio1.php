<?php
$resultado = "";
$coincidencias = 0;

if (isset($_POST['buscar'])) {

    $texto = $_POST['texto'];
    $palabra = $_POST['palabra'];

    if (!empty($texto) && !empty($palabra)) {

        // contar coincidencias y no distingue mayusculas y minusculas
        $coincidencias = substr_count(strtolower($texto), strtolower($palabra));

        // resalta laa palabra encontrada
        $resultado = str_ireplace(
            $palabra,
            "<mark>$palabra</mark>",
            $texto
        );
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Buscador de Palabras</title>
</head>
<body>

<h2>Buscador de Palabras</h2>

<form method="post">
    <label>Ingrese el texto:</label><br>
    <textarea name="texto" rows="6" cols="60"></textarea><br><br>

    <label>Palabra a buscar:</label><br>
    <input type="text" name="palabra"><br><br>

    <input type="submit" name="buscar" value="Buscar">
</form>

<br>

<?php
if ($coincidencias > 0) {
    echo "<h3>Resultado: Se encontraron $coincidencias coincidencias.</h3>";
    echo "<p>$resultado</p>";
} elseif (isset($_POST['buscar'])) {
    echo "<h3>No se encontraron coincidencias.</h3>";
}
?>

</body>
</html>