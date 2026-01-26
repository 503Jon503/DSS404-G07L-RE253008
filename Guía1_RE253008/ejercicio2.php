<?php
// Variabless
$nombre = "Jonathan Rosales";
$lugar = "San Salvador, El Salvador";
$edad = 18;
$carnet = "RE253008";
// Tabla y datos con HEREDOC
echo <<<TABLA
<table border="1" cellpadding="5">
    <tr>
        <th>Dato</th>
        <th>Información</th>
    </tr>
    <tr>
        <td>Nombre completo</td>
        <td>$nombre</td>
    </tr>
    <tr>
        <td>Lugar de nacimiento</td>
        <td>$lugar</td>
    </tr>
    <tr>
        <td>Edad</td>
        <td>$edad</td>
    </tr>
    <tr>
        <td>Carnet universitario</td>
        <td>$carnet</td>
    </tr>
</table>
TABLA;
?>
