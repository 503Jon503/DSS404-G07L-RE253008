<?php
// matriz de las notas
$notas = array(

    "Nayib Bukele" => array(
        "Parcial" => 9.1,
        "Investigacion" => 8.5,
        "Tarea" => 7.0
    ),

    "Chino Flores" => array(
        "Parcial" => 7.8,
        "Investigacion" => 9.0,
        "Tarea" => 8.5
    ),

    "Juan Bosco" => array(
        "Parcial" => 6.5,
        "Investigacion" => 7.2,
        "Tarea" => 9.0
    )

);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Promedio de Estudiantes (PIEDAD)</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
            text-align: center;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            width: 70%;
            background-color: white;
        }

        th {
            background-color: #2E86C1;
            color: white;
            padding: 8px;
        }

        td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Listado de Promedios</h2>

<table>
    <tr>
        <th>Alumno</th>
        <th>Parcial (50%)</th>
        <th>Investigación (30%)</th>
        <th>Tarea (20%)</th>
        <th>Promedio Final</th>
    </tr>

<?php
foreach ($notas as $nombre => $actividades) {

    // obtnere notas
    $parcial = $actividades["Parcial"];
    $investigacion = $actividades["Investigacion"];
    $tarea = $actividades["Tarea"];

    // calculo del promedio
    $promedio = ($parcial * 0.5) + ($investigacion * 0.3) + ($tarea * 0.2);

    echo "<tr>";
    echo "<td>$nombre</td>";
    echo "<td>$parcial</td>";
    echo "<td>$investigacion</td>";
    echo "<td>$tarea</td>";
    echo "<td><strong>" . number_format($promedio, 2) . "</strong></td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>
