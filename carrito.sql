CREATE TABLE productos (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(100) NOT NULL,
  descripcion TEXT NOT NULL,
  precio DECIMAL(10,2) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE carrito (
  id INT(11) NOT NULL AUTO_INCREMENT,
  id_producto INT(11) NOT NULL,
  cantidad INT(11) NOT NULL,
  PRIMARY KEY (id)
);