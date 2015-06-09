<?php
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT nombre,apellido,fechanacimiento,direccion,telefono,estadocivil,departamento FROM persona WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Usuarios</title>
	</head>
	<body>
		
		<center><h1>Modificar Usuario</h1></center>
		
		<form name="modificar_usuario" method="POST" action="mod_usuario.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>Nombre</b></td>
					<td width="30"><input type="text" name="nombre" size="25" value="<?php echo $row['nombre']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>Apellido</b></td>
					<td><input type="text" name="apellido" size="25" value="<?php echo $row['apellido']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Fecha Nacimiento</b></td>
					<td><input type="text" name="fechanacimiento" size="25" value="<?php echo $row['fechanacimiento']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Direccion</b></td>
					<td><input type="text" name="direccion" size="25" value="<?php echo $row['direccion']; ?>" /></td>
				</tr>
								<tr>
					<td><b>Telefono</b></td>
					<td><input type="text" name="telefono" size="25" value="<?php echo $row['telefono']; ?>" /></td>
				</tr>
								<tr>
					<td><b>Estado Civil</b></td>
					<td><input type="text" name="estadocivil" size="25" value="<?php echo $row['estadocivil']; ?>" /></td>
				<tr>
				
					<td><b>Departamento</b></td>
					<td><input type="text" name="departamento" size="25" value="<?php echo $row['departamento']; ?>" /></td>
				</tr>					
				
				
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
