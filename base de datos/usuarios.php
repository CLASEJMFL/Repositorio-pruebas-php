// archivo: insertar_usuarios.php
<!DOCTYPE html>
<html>
<head>
    <title>Insertar Usuarios</title>
</head>
<body>
    <h2>Insertar Usuario</h2>
    <form method="POST" action="">
        DNI: <input type="text" name="dni" required><br>
        Nombre: <input type="text" name="nombre" required><br>
        Apellido: <input type="text" name="apellido" required><br>
        Teléfono: <input type="text" name="telefono"><br>
        Correo: <input type="email" name="correo"><br>
        <input type="submit" name="submit" value="Insertar">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $conn = new mysqli('localhost', 'usuario', 'usuario', 'Concesionario', null, '/run/mysqld/mysqld.sock');


        if ($conn->connect_error) {
            die('Error de conexión: ' . $conn->connect_error);
        }

        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];

        $sql = "INSERT INTO usuarios (dni, nombre, apellido, telefono, correo) VALUES ('$dni', '$nombre', '$apellido', '$telefono', '$correo')";

        if ($conn->query($sql) === TRUE) {
            echo 'Usuario insertado correctamente';
        } else {
            echo 'Error: ' . $sql . '<br>' . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>