<?php
$diasVividos = "";
$error = "";

if (isset($_POST['calcular'])) {

    if (empty($_POST['anio']) || empty($_POST['mes']) || empty($_POST['dia'])) {
        $error = "Debe completar todos los campos.";
    } else {

        $anio = $_POST['anio'];
        $mes = $_POST['mes'];
        $dia = $_POST['dia'];

        // Vver quee la fecha sea correcta
        if (!checkdate($mes, $dia, $anio)) {
            $error = "La fecha ingresada no es válida.";
        } else {

            // fecha de nacimiento
            $fechaNacimiento = new DateTime("$anio-$mes-$dia");

            // fecha actual
            $fechaActual = new DateTime();

            // calcular la diferencia
            $diferencia = $fechaNacimiento->diff($fechaActual);

            // total
            $diasVividos = $diferencia->days;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Cálculo de días vividos</title>
</head>
<body>

<h2>Cálculo de días vividos</h2>

<form method="post">
    <label>Año de nacimiento:</label><br>
    <input type="number" name="anio" min="1900" max="2100"><br><br>

    <label>Mes de nacimiento:</label><br>
    <input type="number" name="mes" min="1" max="12"><br><br>

    <label>Día de nacimiento:</label><br>
    <input type="number" name="dia" min="1" max="31"><br><br>

    <input type="submit" name="calcular" value="Calcular">
</form>

<br>

<?php
if ($error != "") {
    echo "<p style='color:red;'>$error</p>";
}

if ($diasVividos != "") {
    echo "<table border='1' cellpadding='5'>";
    echo "<tr>";
    echo "<th>Días vividos</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>$diasVividos días</td>";
    echo "</tr>";
    echo "</table>";
}
?>

</body>
</html>
