/*Crear Base de Datos si no existe*/
CREATE DATABASE IF NOT EXISTS productos;
USE productos;

/*Crear tabla si no existe*/
CREATE TABLE IF NOT EXISTS ropa (
    id_ropa INT PRIMARY KEY AUTO_INCREMENT,
    cantidad INT,
    precio INT,
    tipo VARCHAR(30),
    color VARCHAR(30),
    descripcion VARCHAR(50),
    genero VARCHAR(10)
);

/*Llenar tabla*/
INSERT INTO ropa (cantidad, precio, tipo, color, descripcion, genero)
VALUES
    (1, '15', 'Polos', 'Rojo', 'Polos básicos', 'Varones'),
    (1, '15', 'Polos', 'Celeste', 'Polos básicos', 'Varones'),
    (1, '15', 'Polos', 'Verde Militar', 'Polos básicos', 'Varones'),
    (1, '40', 'Polos', 'Rojo', 'Polos con cuello', 'Varones'),
    (1, '40', 'Polos', 'Beige', 'Polos con cuello', 'Varones'),
    (1, '40', 'Polos', 'Celeste', 'Polos con cuello', 'Varones'),
    (1, '35', 'Polos', 'Negro', 'Polos sin cuello', 'Varones'),
    (1, '35', 'Polos', 'Marrón', 'Polos sin cuello', 'Varones');

