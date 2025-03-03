<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       	$minombre = $_GET["nombre"];
        $servidor = "localhost";
        $usuario = "root";
        $pass = "userUSER2";
        $conexion = mysqli_connect($servidor,$usuario,$pass) or die("Error de conexión");
        mysqli_select_db($conexion,"alumnos");
        $insertar = "INSERT alumno (paco) VALUES ('$minombre')"; 
        mysqli_query($conexion,$insertar);	
    ?>
</body>
</html>