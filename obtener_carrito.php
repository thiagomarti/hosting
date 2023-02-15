<?php
session_start();

// Mostrar el contenido del carrito
if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
  echo "<h3>Carrito de compras:</h3>";
  foreach ($_SESSION['carrito'] as $id => $producto) {
    echo "<div>";
    echo "<p>".$producto['producto']['nombre']." x ".$producto['cantidad']." = $".$producto['producto']['precio'] * $producto['cantidad']."</p>";
    echo "</div>";
  }
} else {
  echo "<p>No hay productos en el carrito.</p>";
}