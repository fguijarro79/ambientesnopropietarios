<?php
	require('conexion.php');
	
	$query="SELECT id, nombre, apellido ,fechanacimiento ,direccion ,telefono ,estadocivil ,departamento FROM persona";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
<head>
<style>
thead {color:green;}
table, th {
    border: 1px solid black;
}
</style>
</head>
	<tbody>
					
		<center><h1>EMPLEADOS</h1></center>
		
			

		<h1>NUEVO USUARIO</h1>
		
		<form name="nuevo_usuario" method="POST" action="guarda_usuario.php">
			<table width="50%">
				<tr>
					<td><b>Nombre</b></td>
					<td><input type="text" name="nombre" size="25" /></td>
				</tr>
				<tr>
					<td><b>Apellido</b></td>
					<td><input type="text" name="apellido" size="25" /></td>
				</tr>
				<tr>
					<td><b>Fecha Nacimiento</b></td>
					<td><input type="text" name="fechanacimiento" size="25" /></td>
				</tr>
				<tr>
					<td><b>Direccion</b></td>
					<td><input type="text" name="direccion" size="25" /></td>
				</tr>
		
				<tr>
					<td><b>Telefono</b></td>
					<td><input type="text" name="telefono" size="25" /></td>
				</tr>
				
				<tr>
					<td><b>Estado Civil</b></td>
					<td><input type="text" name="estadocivil" size="25" /></td>
				</tr>
				<tr>
					<td><b>Departamento</b></td>
					<td><input type="text" name="departamento" size="25" /></td>
				</tr>
			
				<tr>
					<td colspan="2"><center><input type="submit" name="eviar" value="Registrar" /></center></td>
				</tr>
			</table>
		</form>
		
		
		
		
		
		<p></p>
		
		<table border=1 width="80%">
			<thead>
				<tr>
				
					<td><b>Nombre</b></td>
					<td><b>Apellido</b></td>
					<td><b>Fecha Nacimiento</b></td>
					<td><b>Direccion</b></td>
					<td><b>Telefono</b></td>
					<td><b>Estado Civil</b></td>
					<td><b>Departamento</b></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td>
								<?php echo $row['nombre'];?>
							</td>
							<td>
								<?php echo $row['apellido'];?>
							</td>
							<td>
							   <?php echo $row['fechanacimiento'];?>
							</td>
							<td>
								<?php echo $row['direccion'];?>
							</td>
							<td>
								<?php echo $row['telefono'];?>
							</td>
							<td>
								<?php echo $row['estadocivil'];?>
							</td>
							<td>
								<?php echo $row['departamento'];?>
							</td>
														
							<td>
								<a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a>
							</td>
							<td>
								<a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			 </thead>
			</table>
			
		</tbody>
	</html>	
	
