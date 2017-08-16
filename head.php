<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rurikk">
    <meta name="Description" content="%DESCRIPCION_PAGINA_TXT%">
    <meta name="Keywords" content="%Keywords_TXT%">
    <meta name="Language" content="Spanish">
    <meta name="Designer" content="www.rurikk.com">
    <meta name="distribution" content="Global">
    <title><?=$site_config['TITULO_PAGINA']?></title>

    <!-- og tags -->
    <meta property="og:description" content="DESCRIPCION_PAGINA_TXT">
    <meta property="og:title" content="<?=$site_config['TITULO_PAGINA']?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?=$site_config['URL_DOMINIO']?>/">
            <meta property="og:image" content="<?=$site_config['URL_LOGO']?>">
        <meta property="og:site_name" content="<?=$site_config['TITULO_PAGINA']?>">

    <!-- og tags google+ -->
    <meta itemprop="description" content="<?=$site_config['DESCRIPCION_PAGINA_TXT']?>">

    <!-- og tags twitter-->
    <meta name="twitter:card" value="<?=$site_config['DESCRIPCION_PAGINA_TXT']?>">

        
    <link rel="shortcut icon" href="<?=$site_config['URL_LOGO']?>" type="jpeg">

    <link href="inicio_archivos/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="inicio_archivos/normalize.css" rel="stylesheet" type="text/css">
    <link href="inicio_archivos/font-face.css" rel="stylesheet" media="screen">
    <link href="inicio_archivos/drop-menu.css" rel="stylesheet" media="screen">
    <link href="inicio_archivos/slicknav.css" rel="stylesheet" media="screen">
    <link href="inicio_archivos/font-awesome.css" rel="stylesheet" media="screen">

    <!-- Main Style -->
    <link href="inicio_archivos/style.css" rel="stylesheet" type="text/css">
    <!-- Main Style -->
            <link href="inicio_archivos/style-rojo.css" rel="stylesheet" type="text/css">
    
	<style>
		@media print {
			#Header, #Bar {
				display : none;
			}
			a[href]:after {
				content: none !important;
			}
		}
	</style>

    <!-- Jquery  -->
    <script src="inicio_archivos/jquery.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    

    <script type="text/javascript" src="jquery.min.js"></script>
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="inicio_archivos/jquery_002.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="inicio_archivos/jquery_004.js"></script>
	<link rel="stylesheet" property="stylesheet" type="text/css" href="inicio_archivos/jquery.css" media="screen">

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" property="stylesheet" type="text/css" href="inicio_archivos/jquery_002.css">
	<script type="text/javascript" src="inicio_archivos/jquery_005.js"></script>
	<script src="inicio_archivos/jquery_003.js"></script>
	<script type="text/javascript" src="inicio_archivos/localidades.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".facymapa").fancybox({
						'width'             : $(window).width()-100,
						'height'            : $(window).height()-100,
						'autoScale'         : false,
						'transitionIn'      : 'none',
						'transitionOut'     : 'none',
						'type'              : 'iframe'
			}); 
		});
	</script>
	
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="inicio_archivos/translateelement.css">
	<script type="text/javascript" charset="UTF-8" src="inicio_archivos/main_es.js"></script>	
	<script type="text/javascript" charset="UTF-8" src="inicio_archivos/element_main.js"></script>	
	<style type="text/css">.fancybox-margin{margin-right:17px;}</style>
	
</head>