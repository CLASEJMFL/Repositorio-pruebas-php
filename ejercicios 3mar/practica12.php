<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	$servidor = 'localhost:3306';
    $usuario = 'root';
    $password = 'userUSER2';
    $conexion = mysqli_connect($servidor, $usuario, $password);
    if(!$conexion ){
         echo 'Conexión fallida<br>';
     }
	else{
		$sql = "CREATE DATABASE IF NOT EXISTS alumnos";
		if (mysqli_query($conexion, $sql)) {
            echo "Base de datos creada con éxito";
		} else {
            echo "Error: " . mysqli_error($conexion);
		}
		mysqli_select_db($conexion,"alumnos");
		$sql2 = "CREATE TABLE clientes(nombre VARCHAR(20))";  
         if(mysqli_query($conexion, $sql2)){  
         echo "Table created successfully";  
         } else {  
            echo "Table is not created successfully ";  
         }  
	}
?>
</body>
</html>