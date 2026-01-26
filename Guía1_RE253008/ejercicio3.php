<?php
echo "<!DOCTYPE html>";
echo "<html lang='es'>";
echo "<head>";
echo "<title>Variables predefinidas</title>";
echo "<meta charset='utf-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<link rel='stylesheet' href='css/predefinidas.css'>";
echo "<script src='js/modernizr.custom.lis.js'></script>";
echo "</head>";

echo "<body>";

echo "<div id='contenedor'>";

echo "<header>";
echo "<h1>Variables predefinidas - Matrices superglobales</h1>";
echo "<img src='img/bg-header.png' alt='Variables predefinidas' title='Variables predefinidas'>";
echo "</header>";

echo "<section>";
echo "<article>";

echo "<p>En esta página se ilustrará cómo se utilizan algunas variables predefinidas ";
echo "en el lenguaje PHP. Estas variables están disponibles para cualquier script ";
echo "que se ejecute y las utilice.</p>";

echo "<p>El valor de estas variables dependerá del servidor sobre el que se ejecuten, ";
echo "de la versión de este y de la configuración que tenga.</p>";

echo "<h3>Ejemplos de utilización:</h3>";

echo "<ul>";

echo "<li>El nombre del servidor donde se está ejecutando este script es: ";
echo "<b><i>\$_SERVER['SERVER_NAME'] = " . $_SERVER['SERVER_NAME'] . "</i></b></li>";

echo "<li>El directorio raíz de documentos en el servidor web es: ";
echo "<b><i>\$_SERVER['DOCUMENT_ROOT'] = " . $_SERVER['DOCUMENT_ROOT'] . "</i></b></li>";

echo "<li>El software que está utilizando es: ";
echo "<b><i>\$_SERVER['SERVER_SOFTWARE'] = " . $_SERVER['SERVER_SOFTWARE'] . "</i></b></li>";

echo "<li>El protocolo que se está utilizando para ver esta página es: ";
echo "<b><i>\$_SERVER['SERVER_PROTOCOL'] = " . $_SERVER['SERVER_PROTOCOL'] . "</i></b></li>";

echo "<li>El puerto usado por el servidor web es: ";
echo "<b><i>\$_SERVER['SERVER_PORT'] = " . $_SERVER['SERVER_PORT'] . "</i></b></li>";

echo "<li>La dirección IP de su computadora es: ";
echo "<b><i>\$_SERVER['REMOTE_ADDR'] = " . $_SERVER['REMOTE_ADDR'] . "</i></b></li>";

echo "<li>La ruta del script actual es: ";
echo "<b><i>\$_SERVER['SCRIPT_NAME'] = " . $_SERVER['SCRIPT_NAME'] . "</i></b></li>";

echo "<li>La ruta absoluta del script es: ";
echo "<b><i>\$_SERVER['SCRIPT_FILENAME'] = " . $_SERVER['SCRIPT_FILENAME'] . "</i></b></li>";

$query_string = !empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : "(No existe)";
echo "<li>La cadena de consulta es: ";
echo "<b><i>\$_SERVER['QUERY_STRING'] = " . $query_string . "</i></b></li>";

echo "<li>La URI utilizada es: ";
echo "<b><i>\$_SERVER['REQUEST_URI'] = " . $_SERVER['REQUEST_URI'] . "</i></b></li>";

echo "<li>El puerto del usuario es: ";
echo "<b><i>\$_SERVER['REMOTE_PORT'] = " . $_SERVER['REMOTE_PORT'] . "</i></b></li>";

echo "<li>El idioma del navegador es: ";
echo "<b><i>\$_SERVER['HTTP_ACCEPT_LANGUAGE'] = " . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "</i></b></li>";

echo "<li>El navegador utilizado es: ";
echo "<b><i>\$_SERVER['HTTP_USER_AGENT'] = " . $_SERVER['HTTP_USER_AGENT'] . "</i></b></li>";

echo "<li>La ubicación del script es: ";
echo "<b><i>\$_SERVER['PHP_SELF'] = " . $_SERVER['PHP_SELF'] . "</i></b></li>";

echo "</ul>";

echo "</article>";
echo "</section>";
echo "</div>";

echo "</body>";
echo "</html>";
?>
