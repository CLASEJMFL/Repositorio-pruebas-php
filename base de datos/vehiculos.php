<!DOCTYPE html>
<html>
<head>
    <title>Insertar Vehículos</title>
</head>
<body>
    <h2>Insertar Vehículo</h2>
    <form method="POST" action="">
        Matrícula: <input type="text" name="matricula" required><br>
        Marca: <input type="text" name="marca" required><br>
        Modelo: <input type="text" name="modelo" required><br>
        Precio: <input type="number" step="0.01" name="precio" required><br>
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

        $sql = "INSERT INTO vehiculos (matricula, marca, modelo, precio) VALUES ('$matricula', '$marca', '$modelo', '$precio')";

        if ($conn->query($sql) === TRUE) {
            echo 'Vehículo insertado correctamente';
        } else {
            echo 'Error: ' . $sql . '<br>' . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>