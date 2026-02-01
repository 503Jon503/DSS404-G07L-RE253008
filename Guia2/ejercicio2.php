<?php
$resultado = "";
$error = "";

if (isset($_POST['verificar'])) {

    if (empty($_POST['caracter'])) {
        $error = "Debe ingresar un carácter.";
    } else {

        $caracter = $_POST['caracter'];

        // validar que solo sea un caracter
        if (strlen($caracter) != 1) {
            $error = "Ingrese solamente un carácter.";
        } else {

            //pasar a minúscula para comparar
            $letra = strtolower($caracter);

            //si es vocal (incluye acentuadas)
            if (in_array($letra, array('a','e','i','o','u','á','é','í','ó','ú'))) {
                $resultado = "Es una vocal.";
            }
            // si es consonante
            elseif (ctype_alpha($caracter)) {
                $resultado = "Es una consonante.";
            }
            //si es número
            elseif (ctype_digit($caracter)) {
                $resultado = "Es un número.";
            }
            // si es símbolo
            elseif (preg_match('/[.,;:()\"\'!¡¿?#$%&]/', $caracter)) {
                $resultado = "Es un símbolo.";
            }
            // si no cumple nada
            else {
                $resultado = "El carácter ingresado no se puede procesar.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Clasificar carácter</title>
</head>
<body>

<h2>Clasificador de carácter</h2>

<form method="post">
    <label>Ingrese un carácter:</label><br>
    <input type="text" name="caracter" maxlength="1">
    <br><br>
    <input type="submit" name="verificar" value="Verificar">
</form>

<br>

<?php
if ($error != "") {
    echo "<p style='color:red;'>$error</p>";
}

if ($resultado != "") {
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Resultado</th></tr>";
    echo "<tr><td>$resultado</td></tr>";
    echo "</table>";
}
?>

</body>
</html>
