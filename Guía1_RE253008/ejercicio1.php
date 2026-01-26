<?php
$servidor = $_SERVER['HTTP_HOST'];
$ruta = $_SERVER['PHP_SELF'];
$direccionCompleta = $servidor . $ruta;
echo $direccionCompleta;
?>
