<!DOCTYPE html>
<html>
<head>
    <title>Insertar Compras</title>
</head>
<body>
    <h2>Insertar Compra</h2>
    <form method="POST" action="">
        Matrícula: <input type="text" name="matricula" required><br>
        Marca: <input type="text" name="marca" required><br>
        Modelo: <input type="text" name="modelo" required><br>
        Precio: <input type="number" step="0.01" name="precio" required><br>
        Nombre Usuario: <input type="text" name="nombre_usuario" required><br>
        DNI Usuario: <input type="text" name="dni_usuario" required><br>
        Teléfono Usuario: <input type="text" name="telefono_usuario"><br>
        <input type="submit" name="submit" value="Insertar">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $conn = new mysqli('localhost', 'usuario', 'usuario', 'Concesionario', null, '/run/mysqld/mysqld.sock');

        if ($conn->connect_error) {
            die('Error de conexión: ' . $conn->connect_error);
        }

        $matricula = $_POST['matricula'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $precio = $_POST['precio'];
        $nombre_usuario = $_POST['nombre_usuario'];
        $dni_usuario = $_POST['dni_usuario'];
        $telefono_usuario = $_POST['telefono_usuario'];

        $sql = "INSERT INTO compras (matricula, marca, modelo, precio, nombre_usuario, dni_usuario, telefono_usuario) VALUES ('$matricula', '$marca', '$modelo', '$precio', '$nombre_usuario', '$dni_usuario', '$telefono_usuario')";

        if ($conn->query($sql) === TRUE) {
            echo 'Compra insertada correctamente';
        } else {
            echo 'Error: ' . $sql . '<br>' . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>