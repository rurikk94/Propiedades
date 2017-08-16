<?php
require_once("/funciones.php"); //Get MYSQL Connection Info

$sql="SELECT id,barrionombre nombre FROM barrios WHERE ciudadId=".$_REQUEST["pais"]." ORDER BY nombre";
$resultado=mysqli_query($conexion,$sql) or
			die("Ocurrio un error en la consulta SQL");
mysqli_close($conexion);

$array = array();
while (($fila = mysqli_fetch_array($resultado)) != NULL) {
	$array[] = $fila;
    echo '<option value="'.$fila["id"].'">'.ucfirst($fila["nombre"]).'</option>';
}
$barrios=$array;
mysqli_free_result($resultado);

?>