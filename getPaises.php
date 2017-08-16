<?php
require_once("/funciones.php"); //Get MYSQL Connection Info


$sql="SELECT c.id id, c.ciudadNombre nombre,c.paisID from ciudades c  ORDER BY nombre";
$resultado=mysqli_query($conexion,$sql) or
			die("Problemas en el select:".mysqli_error($conexion));
mysqli_close($conexion);
echo '<option value="0">Seleccionar</option>';
$array = array();
while($fila = mysqli_fetch_array($resultado)) {
	$array[] = $fila;
	echo '<option value="'.$fila["id"].'">'.ucfirst($fila["nombre"]).'</option>';
}    
$propiedades=$array;
mysqli_free_result($resultado);
	
?>
