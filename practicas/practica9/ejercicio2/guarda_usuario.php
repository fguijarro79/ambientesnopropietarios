<?php 
	
	require('conexion.php');
	
	
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$fechanacimiento=$_POST['fechanacimiento'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$estadocivil=$_POST['estadocivil'];
	$departamento=$_POST['departamento'];
	
	if($nombre != '' && $apellido != '' && $fechanacimiento != '' && $direccion != '' && $telefono != '' && $estadocivil != '' && $departamento != '')
	{
	$query="INSERT INTO persona ( nombre, apellido, fechanacimiento, direccion, telefono, estadocivil, departamento) VALUES ('$nombre','$apellido','$fechanacimiento','$direccion','$telefono','$estadocivil','$departamento')";
	$resultado=$mysqli->query($query);
	if(!$resultado){
      echo '<div>Existi&oacute; un error al insertar.' . $conn->error . '</div>';
    } else {
      echo '<div>Empleado ingresado correctamente.</div>';
    }
    } else {
    echo '<div>Ingrese todos los campos.</div>';
  }
	
?>

