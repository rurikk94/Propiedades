
<?php
// $desactivado='btn btn-primary btn-lg';
// $activo="btn btn-primary btn-lg active";
// $buscar=$desactivado; $buscarV=$desactivado; $agregarC=$desactivado; $agregarV=$desactivado; $intercambiarV=$desactivado;$peticionesI=$desactivado;
// if (($_SERVER["REQUEST_URI"]=='/buscar_juego.php')||(strpos($_SERVER["REQUEST_URI"], 'detalle_juego.php'))){$buscar = $activo;};
// if ($_SERVER["REQUEST_URI"]=='/agregar_categoria.php'){$agregarC = $activo;};
// if ($_SERVER["REQUEST_URI"]=='/agregar_juego.php'){$agregarV = $activo;};
// if ($_SERVER["REQUEST_URI"]=='/peticiones_intercambio.php'){$peticionesI = $activo;};
// if (($_SERVER["REQUEST_URI"]=='/detalle_unidad_juego.php')||(strpos($_SERVER["REQUEST_URI"], 'detalle_juego_usuario'))){$intercambiarV = $activo;};
?>
	<div id="Header">
		<div class="areaHeader auto_margin">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
						 <a href="http://<?=$site_config['URL_DOMINIO']?>"><div class="logo"><img src="<?=$site_config['URL_LOGO']?>" alt=""></a></div>
					</div>
					<div class="col-md-9">
						<div class="topMenu">
							<div class="flat-mega-menu">
								<ul id="idrop" class="mcollapse changer">
									<li><a href="http://<?=$site_config['URL_DOMINIO']?>">Inicio</a></li> <!-- idElemento 1 Inicio-->
									<li><a href="<?=$site_config['URL_BUSCADOR']?>?tipo_negocio=2">Arriendo</a> <!-- idElemento 2 Arriendo tipoNegocioId=2 -->
										<ul class="drop-down one-column hover-fade b_bt">
											<li><a href="<?=$site_config['URL_BUSCADOR']?>?tipo_negocio=$2&amp;tipoInmuebleId=$tipoInmuebleId">$tipoInmueble</a></li>
										</ul>
									</li>
									<li><a href="<?=$site_config['URL_BUSCADOR']?>?tipo_negocio=1">Ventas</a> <!-- idElemento 3 Ventas  tipoNegocioId=1-->
										<ul class="drop-down one-column hover-fade b_bt">
											<li><a href="<?=$site_config['URL_BUSCADOR']?>?tipo_negocio=$1&amp;tipoInmuebleId=$tipoInmuebleId">$tipoInmueble</a></li>
										</ul>
									</li>
									<!--<li><a href="ultimas.php">$4</a></li> <!-- idElemento 4 ultimasPropiedades-->
									<li><a href="quienesSomos.php">Nosotros</a></li> <!-- idElemento 5 quienesSomos---->
									<li><a href="contacto.php">Contacto</a></li> <!-- idElemento 6 contacto-->
								</ul>
							</div>
							<!-- end menu -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section id="Bar" class="bg_color">
		<div class="barData auto_margin">
			<div class="container-fluid">
				<div class="col-sm-6">
					Tel. <?=$site_config['TELEFONO_FIJO_CONTACTO']?> -
					Móvil. <a style="color: #ffffff;" href="tel:TELEFONO_MOVIL_CONTACTO"><b><?=$site_config['TELEFONO_MOVIL_CONTACTO']?></b></a>
														| <?=$site_config['CIUDAD_CONTACTO']?>, Chile.
				</div>
				<div class="col-sm-4">
					<div class="redes auto_margin">
					Síguenos en:
											<a href="%URL_FB_FANPAGE%"><i class="fa fa-facebook-square"></i></a>

					</div>

				</div>
			</div>
		</div>
	</section>
