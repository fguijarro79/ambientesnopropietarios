<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$fechanacimiento=$_POST['fechanacimiento'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$estadocivil=$_POST['estadocivil'];
	$departamento=$_POST['departamento'];
	
	$query="UPDATE persona SET nombre='$nombre', apellido='$apellido', fechanacimiento='$fechanacimiento' , direccion='$direccion' , telefono='$telefono' , estadocivil='$estadocivil' , departamento='$departamento'  WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar usuario</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Usuario Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Usuario</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				