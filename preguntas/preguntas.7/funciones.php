<?php

$cabecera=array("Pais","Capital");
$ecuador=array("ecuador","Quito");
$colombia=array("Colombia","Bogota");
$peru=array("Peru","Lima");
$bolivia=array("Bolivia","La Paz");
$agenda=array($cabecera,$ecuador,$colombia,$peru,$bolivia);
?>
    
       
   
<!DOCTYPE html>
<html lang="es">
<head>

	<title>Paises en PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
 
<body>
 
    <table border="1" width="60%" cellspacing="0">
<?php  
foreach ($agenda as $fila){
        echo "<tr>";
        foreach ($fila as $celda){
                echo "<td> $celda </td>";
                }
        echo "</tr>";
        }
?>
</table>
</body>
</html>