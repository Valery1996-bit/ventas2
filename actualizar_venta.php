<?php

require "config/conexion.php";

$cod = $_POST["cod"];
$cantidad = $_POST["cantidad"];
$valor = $_POST["valor"];
$total = $cantidad * $valor;

$sql = "UPDATE ventas SET cantidad=$cantidad, valor=$valor, total=$total WHERE id=$cod";

if ($dbh->query($sql)) {
    echo "Datos actualizados";
} else {
    echo "Error actualizando: " . $dbh->error;
}

?>
