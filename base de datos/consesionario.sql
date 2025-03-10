CREATE DATABASE concesionaria;
USE concesionaria_autos;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    dni VARCHAR(9) UNIQUE NOT NULL,
    telefono VARCHAR(15),
    correo VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE autos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(50) NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    matricula VARCHAR(10) UNIQUE NOT NULL,
    precio DECIMAL(10,2) NOT NULL
);

CREATE TABLE compras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    auto_id INT NOT NULL,
    fecha DATE NOT NULL,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id),
    FOREIGN KEY (auto_id) REFERENCES autos(id)
);