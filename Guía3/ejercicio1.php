<?php
$resultado = "";
$error = "";

if (isset($_POST['calcular'])) {

    if (empty($_POST['numero1']) || empty($_POST['numero2'])) {
        $error = "Debe ingresar ambos números.";
    } else {

        $base = $_POST['numero1'];
        $exponente = $_POST['numero2'];

        // validar el primero sea numérico
        if (!is_numeric($base)) {
            $error = "El primer número debe ser numérico.";
        }
        // validarel segundo que sea entero
        elseif (!ctype_digit($exponente)) {
            $error = "El segundo número debe ser un entero positivo.";
        }
        else {

            $resultado = 1;

            // Ciclo para multiplicar
            for ($i = 1; $i <= $exponente; $i++) {
                $resultado = $resultado * $base;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Cálculo de Potencia</title>
</head>
<body>

<h2>Cálculo de Potencia</h2>

<form method="post">
    <label>Primer número (base):</label><br>
    <input type="text" name="numero1"><br><br>

    <label>Segundo número (exponente):</label><br>
    <input type="number" name="numero2"><br><br>

    <input type="submit" name="calcular" value="Calcular">
</form>

<br>

<?php
if ($error != "") {
    echo "<p style='color:red;'>$error</p>";
}

if ($resultado !== "" && $error == "") {
    echo "<table border='1' cellpadding='5'>";
    echo "<tr>";
    echo "<th>Base</th>";
    echo "<th>Exponente</th>";
    echo "<th>Resultado</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>$base</td>";
    echo "<td>$exponente</td>";
    echo "<td>$resultado</td>";
    echo "</tr>";
    echo "</table>";
}
?>

</body>
</html>
