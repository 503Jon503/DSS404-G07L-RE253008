<?php
// variables
$dolares = "";
$euros = "";
$error = "";

// el cambio a euro (25/01/2026)
$tipoCambio = 0.84;
if (isset($_POST['convertir'])) {

    // que no este vacio
    if (empty($_POST['dolares'])) {
        $error = "Debe ingresar una cantidad en dólares.";
    } else {

        //  guardar dato
        $dolares = $_POST['dolares'];

        // entero y positivo
        if (!is_numeric($dolares) || $dolares <= 0) {
            $error = "Ingrese una cantidad válida mayor que cero.";
        } else {
            // convertidor a euro
            $euros = $dolares * $tipoCambio;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Conversión de Dólares a Euros</title>
</head>
<body>

<h2>Conversión de Dólares a Euros</h2>

<form method="post">
    <label>Cantidad en dólares:</label><br>
    <input type="text" name="dolares">
    <br><br>
    <input type="submit" name="convertir" value="Convertir">
</form>

<br>

<?php
// para ver si esta mal
if ($error != "") {
    echo "<p style='color:red;'>$error</p>";
}

// converdion en la tabla
if ($euros != "") {
    echo "<table border='1' cellpadding='5'>";
    echo "<tr>";
    echo "<th>Dólares</th>";
    echo "<th>Euros</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>$dolares</td>";
    echo "<td>" . number_format($euros, 2) . "</td>";
    echo "</tr>";
    echo "</table>";
}
?>

</body>
</html>
