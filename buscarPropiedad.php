<?php
require('funciones.php');
?>
<!DOCTYPE HTML>
<html  class="" style="height: 100%;" lang="es-ES">
<?php include("head.php"); // incluyes el archivo head.php ?>

<!--         CUERPO ---------------------------- -->
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
					<div class="col-md-3 col-sm-4">  <!--menu lateral-->
						<div class="sWidget">
							<h2 class="text_color b_bt">BÚSQUEDA AVANZADA <hr class="b_bt"></h2>
							<div class="searchForm">
							<form action="<?=$site_config['URL_BUSCADOR'];?>" method="get">
								<div class="row">
									<div class="col-sm-12">
									
									<div class="selector-pais">
										<label>CIUDAD</label>
										<select class="form-control" name="ciudad" id="ciudad" data-placeholder="Seleccionar una ciudad"></select>
										<script type="text/javascript">
											$(document).ready(function() {
												$.ajax({
														type: "POST",
														url: "getPaises.php",
														success: function(response)
														{
															$('.selector-pais select').html(response).fadeIn();
														}
												});

											});
										</script>
									</div>
										
									</div>
									
									<div class="col-sm-12">
										
									<div class="sin-json">
										<label>SECTOR</label>
										<select class="form-control" name="zona" id="zonas" data-placeholder="Seleccionar una zona"></select>
										<script type="text/javascript">
											$(document).ready(function() {
												$(".selector-pais select").change(function() {
													var form_data = {
															is_ajax: 1,
															pais: +$(".selector-pais select").val()
													};
													$.ajax({
															type: "POST",
															url: "getProvincias.php",
															data: form_data,
															success: function(response)
															{
																$('.sin-json select').html(response).fadeIn();
															}
													});
												});

											});
										</script>
									</div>

									</div>
									<div class="col-sm-12">
										<label>TIPO INMUEBLE</label>
										<select class="form-control" name="tipo_inmueble">
											<option value="0" selected="selected">Todos</option>
											<?php
												foreach($tipoInmueble as $row){
											?>
											<option value="<?=$row['id']?>"><?=ucfirst($row['tipoInmueble'])?></option>
											<?php
											}
											?>
										</select>
									</div>
									<div class="col-sm-6">
										<label>TIPO NEGOCIO</label>
										<select class="form-control" name="tipo_negocio" id="tipo_negocio">
											<option value="0" selected="selected">Todos</option>
											<?php
												foreach($tipoNegocio as $row){
											?>
											<option value="<?=$row['tipoNegocioId']?>"><?=ucfirst($row['tipoNegocioNombre'])?></option>
											<?php
											}
											?>
										</select>
									</div>
									<div class="col-sm-6">
										<label>ESTADO PROPIEDAD</label>
										<select class="form-control" name="estado" id="estado">
											 <option value="0" selected="selected">Todos</option>
											<?php
												foreach($estadoPropiedad as $row){
											?>
											<option value="<?=$row['estadoId']?>"><?=ucfirst($row['nombreEstado'])?></option>
											<?php
											}
											?>
										</select>
									</div>
									<div class="col-sm-6">
										<label>DORMITORIOS</label>
										<select class="form-control" name="alcobas" id="alcobas">
											<option value="0" selected="selected">Todos</option>
											<?php
												for ($i = 1; $i <= 10; $i++) {
											?>
											<option value="<?=$i?>"><?=$i?></option>
											<?php
											}
											?>
										</select>
									</div>
									<div class="col-sm-6">
										<label>NO. BAÑOS</label>
										<select class="form-control" name="banios" id="banios">
										<option value="0" selected="selected">Todos</option>
											<?php
												for ($i = 1; $i <= 10; $i++) {
											?>
											<option value="<?=$i?>"><?=$i?></option>
											<?php
											}
											?>
										</select>
									</div>
																	
									<div class="col-sm-12">
										<button type="submit" class="btn">BUSCAR</button>
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>  <!--fin menu lateral-->
					
					<div class="col-md-9 col-sm-8">
						<div class="areaListados">
							<h2>PROPIEDADES DESTACADAS <hr></h2>
							<div class="row">
							
							<?php
								foreach($propiedadesBuscadas as $row){
							?>
								<!-- Item -->
								<div class="col-md-4 col-sm-6">
									<div class="item">
										<a href="/detalleInmueble.php?propiedadId=<?=$row['propiedadId']?>">
										<figure style="">
											<img src="<?=$row['urlFotoPrincipal']?>" alt="<?=$row['tituloPropiedad']?>" title="<?=$row['tituloPropiedad']?>">
										</figure>
										<h3><?=ucfirst($row['tituloPropiedad'])?></h3>
										<p><?=ucfirst($row['tipoInmueble'])?>  en <?=ucfirst($row['barrioNombre'])?>, <?=ucfirst($row['ciudadNombre'])?>
										<?php
											if ($row['metrosCuadrados']>0) {echo ", con área de ".$row['metrosCuadrados']."m<sup>2</sup>";};
											if ($row['numDormitorios']>0) {echo ", ".$row['numDormitorios']." Dormitorios   ";};
											if ($row['numBanos']>0) {echo " y ".$row['numBanos']." baños.";};
											?>
										</p>
										<div class="table">
												<div class="colm"><img src="inicio_archivos/bt01.png" alt=""> <?=$row['numDormitorios']?> DORMITORIOS </div>
												<div class="colm"><img src="inicio_archivos/bt02.png" alt=""> <?=$row['numBanos']?> BAÑOS</div>
										</div>																			 
										<strong class="price" style=""><?=numeracionChile($row['signo'],$row['precioPropiedad'])?></strong>
										</a>
									</div>
								</div>
							<?php
								}
							?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



<?php include("footer.php");// incluyes el archivo footer.php ?>

</body>
</html>
<?php

  // header("Location: index.php");  

?>