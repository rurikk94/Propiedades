<?php
require_once("/conexion.php"); //Get MYSQL Connection Info
require_once("/config.php");  //Get Site Settings and Vars ($site_config)


	//printf("Conjunto de caracteres inicial: %s\n", mysqli_character_set_name($conexion));
	if (!mysqli_set_charset($conexion, "utf8")) {
		printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($conexion));
	} else {
		//printf("Conjunto de caracteres actual: %s\n", mysqli_character_set_name($conexion));
	}

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
				ON m.id = p.monedaId";
    $resultado=mysqli_query($conexion,$sql) or
                die("Problemas en el select:".mysqli_error($conexion));
                
    $array = array();
    while($row = mysqli_fetch_array($resultado)) {
        $array[] = $row;
    }    
    $propiedades=$array;
	
	
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