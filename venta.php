<?php

require "config/conexion.php";

$cantidad = $_POST["cantidad"];
$valor = $_POST["valor"];
$total = $cantidad * $valor;

$sql = "INSERT INTO ventas(cantidad, valor, total) VALUES ($cantidad, $valor, $total)";

if ($dbh->query($sql)) {
    echo "Venta exitosa";
} else {
    echo " Venta fallida: " . $dbh->error;
}

?>
