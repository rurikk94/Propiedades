<?php
require("funciones.php");
?>
<!DOCTYPE HTML>
<html  class="" style="height: 100%;" lang="es-ES">
<?php include("head.php"); // incluyes el archivo head.php ?>

<!--         CUERPO  -->
<body style="position: relative; min-height: 100%; top: 0px;">
<?php include("menus.php");// incluyes el archivo menus.php ?>


<body style="position: relative; min-height: 100%; top: 0px;">

	<section id="Middle" class="bgImage" style="background: url(<?=$site_config['URL_IMAGEN_FONDO']?>)">
		<div class="areaMiddle">
			<form action="main-buscarq.htm" enctype="text/plain" method="get">
				<div class="areaSearch bg_color">
					<input name="q" id="textfield" size="26" class="form-control inp-search" placeholder="BÚSQUEDA RÁPIDA " type="text">
				</div>
			</form>
		</div>
	</section>

	<div style="margin-top: -120px"></div>
	<section id="Main">
    <div class="areaMain auto_margin">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-9 col-sm-8">
            <div class="areaBloqs">
              <div class="row">

                <div class="col-sm-12">
                  <h2>Se arrienda Local en S. Francisco de Limache</h2>
                </div>
								<?php //foreache de fotos ?>
                <div class="col-md-7">
                  <div class="areaTabs">
                    <img src="<?=$row['URL_FOTO']?>" class="fotorama__img" style="width: 90px; height: 68px; margin-left: -45px; margin-top: -34px;">

										<?php //fin del foreache de fotos ?>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="areaDetalles">

										<?php //arreglo con los datos de la propiedad  ?>
                    <h4>Detalle del Inmueble <hr></h4>

                    <ul>
                      <li><span class="tt1">Código:</span> <span class="tt2"><?=$row['propiedadId']?></span></li>
                      <li><span class="tt1">Estado: </span> <span class="tt2"><?=$row['estadoPropiedad']?></span></li>
                      <li><span class="tt1">Ubicación: </span> <span class="tt2"><?=$row['barrionombre']?>, <?=$row['ciudadNombre']?></span></li>
                      <li><span class="tt1">Superficie terreno:</span> <span class="tt2"><?=$row['metrosCuadrados']?> m<sup>2</sup></span></li>




                      <li><span class="tt1">Tipo Inmueble:</span> <span class="tt2"><?=$row['tipoInmueble']?></span></li>
                      <li><span class="tt1">Negocio:</span> <span class="tt2"><?=$row['tipoNegocioNombre']?></span></li>
                    </ul>

                    <div class="areaPrecio">
                      <span class="tt4">Precio Renta Mensual</span>
                      <span class="tt2" style=""><?=$row['precioPropiedad']?></span>

                      <span class="tt3"><?=$row['signo']?></span>
                      <span class="tt2"><?=$row['monedanombre']?></span>
                    </div>


                  </div>
                </div>

              </div>
            </div>
            <div class="areaBloqs">
              <div class="dtContt">
                <h4>Información Adicional  <hr></h4>
                <p></p>
                <p><strong>Jarrett.cl Código:</strong>386090</p>

                <p>&nbsp;</p>

                <p><span style="font-size:10pt">Se arrienda local comercial en Palmira Romano Norte, via principal de limache. Cuenta con un terreno de 660 m2, con dos construcciones una sala de ventas de 80 m2 y un galpón de 240m2 - 8 m. de alto. Estacionamientos.</span></p>

                <p><span style="font-size:10pt">Especial para una comercializadora, distribuidora de productos, ferreteria, taller, etc.</span></p>

                <p>&nbsp;</p>

                <p><strong>Valor 45 UF mensual</strong></p>

                <p><span style="font-size:10pt">Pagos adicionales al arrendar:</span></p>

                <p><span style="font-size:10pt">45 UF.- Mes de garantia (una sola vez)</span></p>

                <p><span style="font-size:10pt">22,5 UF - Comisión Agente Inmobiliario (una sola vez)</span></p>

								<?php //arreglo de los datos ?>
                <div>&nbsp;</div>
                <p></p>
              </div>
            </div>
          </div>

      </div>
    </div>
  </section>



<?php include("footer.php");// incluyes el archivo footer.php ?>

</body>
</html>
