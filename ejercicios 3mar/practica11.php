<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php 
    if(isset($_POST['usuario'])) {
		if(!empty($_POST['usuario'])){
			$usuario = $_POST['usuario'];
			echo "Nombre de usuario: " . $usuario;
			echo "<p> </p>";
		}
    }
?>
</body>
</html>