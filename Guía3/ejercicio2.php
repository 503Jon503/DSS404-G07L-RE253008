<?php
$numero = "";
$error = "";

if (isset($_POST['mostrar'])) {

    if (empty($_POST['numero'])) {
        $error = "Debe ingresar un número.";
    } else {

        $numero = $_POST['numero'];

        if (!ctype_digit($numero) || $numero < 1 || $numero > 10) {
            $error = "Ingrese un número entero del 1 al 10.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Tabla de mukltiplicar</title>
    <link rel="stylesheet" href="ejercicio2.css">
</head>
<body>

<h2>Tabla de Multiplicar</h2>

<form method="post">
    <label>Ingrese un número del 1 al 10:</label><br>
    <input type="text" name="numero"><br><br>
    <input type="submit" name="mostrar" value="Mostrar tabla">
</form>

<br>

<?php
if ($error != "") {
    echo "<p class='error'>$error</p>";
}

if ($numero != "" && $error == "") {

    echo "<table>";
    echo "<tr><th colspan='2'>Tabla del $numero</th></tr>";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<tr>";
        echo "<td>$numero x $i</td>";
        echo "<td>$resultado</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
