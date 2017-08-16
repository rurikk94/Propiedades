
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
						<div class="logo"><img src="<?=$site_config['URL_LOGO']?>" alt=""></div>
						<!--<div class="logo"><img src="%URL_LOGO%" alt=""></div>-->
					</div>
					<div class="col-md-9">
						<div class="topMenu">
							<div class="flat-mega-menu">
								<ul id="idrop" class="mcollapse changer">
									<li><a href="$URL_DOMINIO">$1</a></li> <!-- idElemento 1 Inicio-->
									<li><a href="/buscarPropiedades.php?tipo_negocio=$tipoNegocioId">$2</a> <!-- idElemento 2 Arriendo tipoNegocioId=2 -->
										<ul class="drop-down one-column hover-fade b_bt">
											<li><a href="/buscarPropiedades.php?tipo_negocio=$tipoNegocioId&amp;tipoInmuebleId=$tipoInmuebleId">$tipoInmueble</a></li>
										</ul>
									</li>
									<li><a href="/buscarPropiedades.php?tipo_negocio=$tipoNegocioId">$3</a> <!-- idElemento 3 Ventas  tipoNegocioId=1-->
										<ul class="drop-down one-column hover-fade b_bt">
											<li><a href="/buscarPropiedades.php?tipo_negocio=$tipoNegocioId&amp;tipoInmuebleId=$tipoInmuebleId">$tipoInmueble</a></li>
										</ul>
									</li>
									<li><a href="ultimas.php">$4</a></li> <!-- idElemento 4 ultimasPropiedades-->
									<li><a href="quienesSomos.php">$5</a></li> <!-- idElemento 5 quienesSomos---->
									<li><a href="contacto.php">$6</a></li> <!-- idElemento 6 contacto-->
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

	<div class="slicknav_menu">
		<a href="#" aria-haspopup="true" tabindex="0" class="slicknav_btn slicknav_collapsed" style="">
			<span class="slicknav_menutxt">MENU</span>
			<span class="slicknav_icon">
				<span class="slicknav_icon-bar"></span>
				<span class="slicknav_icon-bar"></span>
				<span class="slicknav_icon-bar"></span>
			</span>
		</a>
		<ul class="slicknav_nav slicknav_hidden" style="display: none;" aria-hidden="true" role="menu">
			<li><a href="$URL_DOMINI" role="menuitem" tabindex="-1">$1</a></li><!-- idElemento 1 Inicio-->
			<li class="slicknav_collapsed slicknav_parent">
				<a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="">
				<a href="/buscarPropiedades.php?tipo_negocio=$tipoNegocioId"" tabindex="-1">$2</a> <!-- idElemento 2 Arriendo tipoNegocioId=2 -->
				<span class="slicknav_arrow">?</span></a>
				<ul class="drop-down one-column hover-fade b_bt slicknav_hidden" role="menu" style="display: none;" aria-hidden="true">
					<li><a href="/buscarPropiedades.php?tipo_negocio=$tipoNegocioId&amp;tipoInmuebleId=$tipoInmuebleId"role="menuitem" tabindex="-1">$tipoInmueble</a></li>
				</ul>
			</li>
			
			<li class="slicknav_collapsed slicknav_parent">
			<a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="">
				<a href="/buscarPropiedades.php?tipo_negocio=$tipoNegocioId"" tabindex="-1">$3</a> <!-- idElemento 2 Arriendo tipoNegocioId=2 -->
			<span class="slicknav_arrow">?</span></a>
				<ul class="drop-down one-column hover-fade b_bt slicknav_hidden" role="menu" style="display: none;" aria-hidden="true">
					<li><a href="/buscarPropiedades.php?tipo_negocio=$tipoNegocioId&amp;tipoInmuebleId=$tipoInmuebleId"role="menuitem" tabindex="-1">$tipoInmueble</a></li>
				 
				</ul>
			</li>
			<li><a href="ultimas.php" role="menuitem" tabindex="-1">$4</a></li> <!-- idElemento 4 ultimasPropiedades-->
			<li><a href="quienesSomos.php" role="menuitem" tabindex="-1">$5</a></li> <!-- idElemento 5 quienesSomos---->
			<li><a href="contacto.php" role="menuitem" tabindex="-1">$6</a></li> <!-- idElemento 6 contacto-->
		</ul>
	</div>