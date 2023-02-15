// Función para agregar productos al carrito
function agregarAlCarrito(id) {
  // Enviar la solicitud AJAX para agregar el producto al carrito
  $.ajax({
    url: "agregar_al_carrito.php",
    type: "POST",
    data: {id: id},
    success: function(response) {
      console.log(response); // Mostrar la respuesta del servidor en la consola
      actualizarContenidoCarrito(); // Actualizar el contenido del carrito después de agregar el producto
    }
  });
}

// Función para actualizar el contenido del carrito
function actualizarContenidoCarrito() {
  // Enviar la solicitud AJAX para obtener el contenido del carrito
  $.ajax({
    url: "obtener_carrito.php",
    type: "POST",
    success: function(response) {
      $("#contenido-carrito").html(response); // Mostrar el contenido del carrito en el elemento con ID "contenido-carrito"
    }
  });
}

// Cargar el contenido del carrito al cargar la página
$(document).ready(function() {
  actualizarContenidoCarrito();
});
