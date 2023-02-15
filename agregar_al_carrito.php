<?php
session_start();

if (isset($_POST['id'])) {
  $id = $_POST['id'];

  // Agregar el producto al carrito
  if (isset($_SESSION['carrito'][$id])) {
    $_SESSION['carrito'][$id]['cantidad']++;
  } else {
    $_SESSION['carrito'][$id]['cantidad'] = 1;
    // Obtener el precio y otros detalles del producto según su ID de la base de datos
    // Guardar esos detalles en el array asociativo de la sesión con la clave 'producto'
    $_SESSION['carrito'][$id]['producto'] = obtenerDetallesDelProducto($id);
  }

  echo "Producto agregado al carrito.";
} else {
  echo "ID de producto no especificado.";
}

// Función para obtener los detalles del producto según su ID de la base de datos
function obtenerDetallesDelProducto($id) {
  // Consultar la base de datos para obtener los detalles del producto según su ID
  $detalles = array(
    "nombre" => "Producto ".$id,
    "precio" => ($id * 5)
  );
  return $detalles;
}