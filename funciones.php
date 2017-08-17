<?php
require_once("conexion.php"); //Get MYSQL Connection Info
require_once("config.php");  //Get Site Settings and Vars ($site_config)


	//printf("Conjunto de caracteres inicial: %s\n", mysqli_character_set_name($conexion));
	if (!mysqli_set_charset($conexion, "utf8")) {
		//printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($conexion));
	} else {
		//printf("Conjunto de caracteres actual: %s\n", mysqli_character_set_name($conexion));
	}
	
	$host= $_SERVER["HTTP_HOST"];
	$url= $_SERVER["REQUEST_URI"];
	//echo "http://" . $host ."-". $url;

	$sql="SELECT p.propiedadId, c.ciudadNombre,b.barrioNombre,n.tipoNegocioNombre,catI.tipoInmueble,e.nombreEstado,tituloPropiedad,precioPropiedad,m.signo,infoAdicional,numDormitorios,numBanos,metrosCuadrados,numGarajes,visible,eliminado,visitasWeb,urlFotoPrincipal
			from propiedades p 
			INNER JOIN ciudades c
				ON c.id = p.ciudadId 
			INNER JOIN tipos_negocios n
				ON n.tipoNegocioId = p.negocioId
			INNER JOIN barrios b
				ON b.id = p.barrioId
			INNER JOIN categorias_inmueble catI 
				ON catI.tipoInmuebleId = p.catInmuebleID
			INNER JOIN estados_propiedad e
				ON e.estadoId = p.estadoPropiedadId
			INNER JOIN monedas m
				ON m.id = p.monedaId
			WHERE visible=1 and eliminado =0";
    $resultado=mysqli_query($conexion,$sql) or
                die("Problemas en el select:".mysqli_error($conexion));
                
    $array = array();
    while($row = mysqli_fetch_array($resultado)) {
        $array[] = $row;
    }    
    $propiedades=$array;
	
	
	if (stripos($url, "buscarPropiedad.php") !== false) {
		
	$ciudad=0;
	$barrio=0;
	$tipo_inmueble=0;
	$tipo_negocio=0;
	$estado=0;
	$dormitorios=0;
	$banos=0;
	
	$sql="SELECT p.propiedadId, c.ciudadNombre,b.barrioNombre,n.tipoNegocioNombre,catI.tipoInmueble,e.nombreEstado,tituloPropiedad,precioPropiedad,m.signo,infoAdicional,numDormitorios,numBanos,metrosCuadrados,numGarajes,visible,eliminado,visitasWeb,urlFotoPrincipal
			from propiedades p 
			INNER JOIN ciudades c
				ON c.id = p.ciudadId 
			INNER JOIN tipos_negocios n
				ON n.tipoNegocioId = p.negocioId
			INNER JOIN barrios b
				ON b.id = p.barrioId
			INNER JOIN categorias_inmueble catI 
				ON catI.tipoInmuebleId = p.catInmuebleID
			INNER JOIN estados_propiedad e
				ON e.estadoId = p.estadoPropiedadId
			INNER JOIN monedas m
				ON m.id = p.monedaId
			WHERE visible=1 and eliminado =0";
			
			
	if(!empty($_GET["ciudad"])){$ciudad=$_GET["ciudad"];}
	if(!empty($_GET["barrio"])){$barrio=$_GET["barrio"];}
	if(!empty($_GET["tipo_inmueble"])){$tipo_inmueble=$_GET["tipo_inmueble"];}
	if(!empty($_GET["tipo_negocio"])){$tipo_negocio=$_GET["tipo_negocio"];}
	if(!empty($_GET["estado"])){$estado=$_GET["estado"];}
	if(!empty($_GET["dormitorios"])){$dormitorios=$_GET["dormitorios"];}
	if(!empty($_GET["banos"])){$banos=$_GET["banos"];}
			
	if ($ciudad>0) {$sql.=" and p.ciudadId=".$ciudad."";}
	if ($barrio>0) {$sql.=" and p.barrioId=".$barrio."";}
	if ($tipo_inmueble>0) {$sql.=" and p.catInmuebleID=".$tipo_inmueble."";}
	if ($tipo_negocio>0) {$sql.=" and p.negocioId=".$tipo_negocio."";}
	if ($estado>0) {$sql.=" and p.estadoPropiedadId=".$estado."";}
	if ($dormitorios>0) {$sql.=" and p.numDormitorios=".$dormitorios."";}
	if ($banos>0) {$sql.=" and p.numBanos=".$banos."";}
	$sql.=";";
	
	//echo "<br>".$sql."<br>";
	
    $resultado=mysqli_query($conexion,$sql) or
                die("Problemas en el select:".mysqli_error($conexion));
                
    $array = array();
    while($row = mysqli_fetch_array($resultado)) {
        $array[] = $row;
    }    
    $propiedadesBuscadas=$array;
	}
	
	$sql="SELECT i.tipoInmuebleId id, i.tipoInmueble tipoInmueble from categorias_inmueble i order by tipoInmueble";
    $resultado=mysqli_query($conexion,$sql) or
                die("Problemas en el select:".mysqli_error($conexion));
                
    $array = array();
    while($row = mysqli_fetch_array($resultado)) {
        $array[] = $row;
    }    
    $tipoInmueble=$array;
	
	
	$sql="SELECT n.tipoNegocioId , n.tipoNegocioNombre from tipos_negocios n order by tipoNegocioNombre";
    $resultado=mysqli_query($conexion,$sql) or
                die("Problemas en el select:".mysqli_error($conexion));
                
    $array = array();
    while($row = mysqli_fetch_array($resultado)) {
        $array[] = $row;
    }    
    $tipoNegocio=$array;
	
	
	$sql="SELECT e.estadoId , e.nombreEstado from estados_propiedad e order by nombreEstado";
    $resultado=mysqli_query($conexion,$sql) or
                die("Problemas en el select:".mysqli_error($conexion));
                
    $array = array();
    while($row = mysqli_fetch_array($resultado)) {
        $array[] = $row;
    }    
    $estadoPropiedad=$array;
		
	
	function numeracionChile($signo, $cantidad)
	{
		
		$valor_devuelto = $signo." ".number_format($cantidad,"0",",",".");
		return $valor_devuelto;
	}
?>