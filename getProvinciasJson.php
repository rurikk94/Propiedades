<?php
require_once("/funciones.php"); //Get MYSQL Connection Info

$sql="SELECT id,barrionombre nombre FROM barrios WHERE ciudadId=".$_REQUEST["pais"]." ORDER BY nombre";
$resultado=mysqli_query($conexion,$sql) or
			die("Ocurrio un error en la consulta SQL");
mysqli_close($conexion);

$provincias = array();
while (($fila = mysqli_fetch_array($resultado)) != NULL) {
    $provincias[$fila['id']] = $fila['nombre'];
	
}
print_r(json_encode($provincias));
mysqli_free_result($resultado);

?>
