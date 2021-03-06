<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Municipio de Delicias</title>
	<link rel="stylesheet" href="css/principal.css">
	<link rel="stylesheet" href="css/normalize1.css">
	
	<!--Galeria -->
	<link rel="stylesheet" href="css/estilosgaleriaorg.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="js/galeria/galeriappal.js"></script>
	<script type="text/javascript" src="js/galeria/featureList.js"></script>
    <script type="text/javascript" src="js/galeria/galeria.js"></script>
    <!--Fin Galeria-->
    <!--Carrusel-->
	<link rel="stylesheet" href="css/carrusel.css">
    <!--/**/-->
    <script type="text/javascript" language="javascript" src="js/carrusel/jquery.carouFredSel-6.1.0-packed.js"></script>
    <script type="text/javascript" language="javascript" src="js/carrusel/carrusel.js"></script>
    <!-- optionally include helper plugins -->
	<script type="text/javascript" language="javascript" src="js/carrusel/helper-plugins/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/carrusel/helper-plugins/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/carrusel/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
    <!--Fin Carrusel-->
    <script src="js/jquery.simpleWeather.js"></script>
    <script type="text/javascript" src="js/reloj.js"></script>
</head>
<body onload="actualizaReloj();">
	<div class="wrapper">
		<div id="weather">
			
		</div>
		
		<header>
			<img class="logo-header" src="img/nuevo/logo2013150.jpg" alt="">
			<nav>
				<ul>
					<li class="activo"><a href="#">Inicio</a></li>
					<li><a href="#">servicios</a></li>
					<li><a href="#">trrabajos</a></li>
					<li><a href="#">acerca</a></li>
					<li><a href="#">contacto</a></li>
				</ul>
			</nav>
		</header>
			
		<div class="contenedor">
			
			<div class="galeria">
				<div id="content">
					<div id="feature_list">
						<ul id="pestanas">
							<li>
								<a href="javascript:;">
									<!--	<img src="services.png" />-->
									<h3>Abcdefgakdkf</h3>
									<!--	<descripcion><span>Se gradúan Cadetes de la Academia de Policía</span></descripcion>-->
								</a>
							</li>
							<li>
								<a href="javascript:;">
									<!--<img src="programming.png" />-->
									<h3>Entrega Gobernador a Mario Mata llaves de 2 ambulancias</h3>
									<!--	<descripcion><span>Noticia 2</span></descripcion>-->
								</a>
							</li>
							<li>
								<a href="javascript:;">
									<!--<img src="applications.png" />-->
									<h3>Festejaron a m&aacute;s de 10 mil mam&aacute;s en el gran estadio Delicias</h3>
									<!--<descripcion><span>Noticia4</span></descripcion>-->
								</a>
							</li>
						</ul>
			
						<ul id="ver_articulo">
							<li>
								<img src="img/galeria/sample2.jpg" />
								<a href="http://delicias.gob.mx/noticias/noticia1.php">Leer M&aacute;s</a>
							</li>
							<li>
								<img src="img/galeria/sample2.jpg" />
								<a href="http://delicias.gob.mx/noticias/noticia2.php">Leer M&aacute;s</a>
							</li>	
							<li>
								<img src="img/galeria/sample2.jpg" />
								<a href="http://delicias.gob.mx/noticias/noticia3.php">Leer M&aacute;s</a>
							</li>
						</ul>
					</div><!--Fin feature list-->
				</div><!--Fin content-->
			</div><!--Fin Galeria-->
			
			<div class="carrusel">
				<div class="image_carousel">
					<div id="foo2">
						<a href="http://www.delicias.gob.mx/predial.php">
							<img src="img/carrusel/300_1.jpg" alt="b" width="180" height="180" />
						</a>
	        			<a href="http://www.delicias.gob.mx/ganadorespredial.php">
	        				<img src="img/carrusel/300_2.jpg" alt="c" width="180" height="180" />
	        			</a>
						<a href="http://www.delicias.gob.mx/spot2.php">
							<img src="img/carrusel/300_3.jpg" alt="s" width="180" height="180" />
						</a>
						<a href="#">
							<img src="img/carrusel/300_4.jpg" alt="t" width="180" height="180" />
						</a>
						<a href="http://www.facebook.com/dif.delicias">
							<img src="img/carrusel/300_5.jpg" alt="s" width="180" height="180" />
						</a>
						<a href="http://www.facebook.com/institutomunicipal.delamujerdelicias">
							<img src="img/carrusel/300_6.jpg" alt="t" width="180" height="180" />
						</a>
						<a href="http://www.facebook.com/instituto.deldeporte">
							<img src="img/carrusel/300_7.jpg" alt="t" width="180" height="180" />
						</a>
						<a href="http://www.estacionometrosdelicias.org/">
							<img src="img/carrusel/300_9.jpg" alt="t" width="180" height="180" />
						</a>
						<a href="http://www.facebook.com/prevencion.delicias">
							<img src="img/carrusel/300_8.jpg" alt="t" width="180" height="180" />
						</a>
						<a href="http://www.facebook.com/desarrollourbanoyecologia">
							<img src="img/carrusel/300_10.jpg" alt="t" width="180" height="180" />
						</a>
					</div><!--Fin Foo-->
				
					<div class="clearfix"></div>
					<a id="prev2" class="prev" href="#"></a>
					<a id="next2" class="next" href="#"></a>
					<div class="pagination" id="foo2_pag"></div>
					

				</div><!--Fin Image-Carousel-->
			</div><!--Fin Carrusel-->
		</div><!--Contenedor-->
	
		<footer>
			<section id="menu-footer">
				<div class="colf">
					<div class="colf-titulo">
						<h2 class="pie">Gobierno</h2>
					</div>
						<div class="colf-lista">
							<ul class="menu-pie">
								<li class="elementos-pie">
									<a href="">El Presidente</a>
								</li>
								<li class="elementos-pie">
									<a href="">El Sindico</a>
								</li>
								<li class="elementos-pie">	
									<a href="">Los Regidores</a>
								</li>
								<li class="elementos-pie">
									<a href="">Gabinete</a>
								</li>
							</ul>
						</div>
					</div><!--
					--><div class="colf">
					
					<div class="colf-titulo">
						<h2 class="pie">Región</h2>
					</div>
						<div class="colf-lista">
							<ul class="menu-pie">
								<li class="elementos-pie">
									<a href="">Municipio de Delicias</a>
								</li>
								<li class="elementos-pie">
									<a href="">Municipio de Meoqui</a>
								</li>
								<li class="elementos-pie">	
									<a href="">Municipio de Saucillo</a>
								</li>
								<li class="elementos-pie">
									<a href="">Municipio deJulimes</a>
								</li>
							</ul>
						</div>
					</div><!--
					--><div class="colf">
					
					<div class="colf-titulo">
						<h2 class="pie">La Ciudad</h2>
					</div>
						<div class="colf-lista">
							<ul class="menu-pie">
								<li class="elementos-pie">
									<a href="">El Escudo</a>
								</li>
								<li class="elementos-pie">
									<a href="">La Fuente de los Fundadores</a>
								</li>
								<li class="elementos-pie">	
									<a href="">El Reloj</a>
								</li>
								<li class="elementos-pie">
									<a href="">Las Pizcadoras</a>
								</li>
							</ul>
						</div>
					</div><!--
				--><div class="colf">
						<div class="colf-titulo">
							<h2 class="pie">Enlaces de Interes</h2>
						</div>
						<div class="colf-lista">
							<ul class="menu-pie">
								<li class="elementos-pie">
									<a href="">Plan Municipal de Desarrollo</a>
								</li>
								<li class="elementos-pie">
									<a href="">Presidencia de la Republica</a>
								</li>
								<li class="elementos-pie">	
									<a href="">Gobierno del Estaso de Chihuaha</a>
								</li>
								<li class="elementos-pie">
									<a href="">Otros Sitios</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<div>xxx</div>
		</footer>
	</div><!--Fin Wrapper-->
	
</body>
<script type="text/javascript">
	
		$.simpleWeather({
    		zipcode: '',
    		woeid: '',
    		location: 'delicias, chihuahua',
    		unit: 'c',
    		success: function(weather) {

    			condiciones = new Array(
        			'Tornado',
					'Tormenta Tropical',
					'Huracán',
					'Tormentas Fuertes',
					'Tormentas',
					'Lluvia y Nieve Mezclada',
					'Lluvia y Aguanieve Mezclada',
					'Aguanieve',
					'Llovizna Helada',
					'Llovizna',
					'Lluvia Helada',
					'Chaparrones',
					'Chaparrones',
					'Nieve Ligera',
					'Nieve Ligera',
					'Ventisca de Nieve',
					'Nieve',
					'Granizo',
					'Aguanieve',
					'Polvo',
					'Niebla',
					'Bruma',
					'Humo',
					'Tempestad',
					'Ventoso',
					'Frío',
					'Nublado',
					'Medio Nublado',
					'Medio Nublado',
					'Parcialmente Nublado',
					'Parcialmente Nublado',
					'Despejado',
					'Soleado',
					'Algo Nublado',
					'Algo Nublado',
					'Lluvia con Granizo',
					'Caluroso',
					'Tormentas Aisladas',
					'Tormentas Dispersas',
					'Tormentas Dispersas',
					'Chubascos Dispersos',
					'Nieve Pesada',
					'Nevadas Débiles y Dispersas',
					'Nevada Intensa',
					'Nubes Dispersas',
					'Tormentas',
					'Nevadas Dispersas',
					'Tormentas Aisladas'
					);

        		
        		html = '<img  src="clima/icons/'+weather.code+'.png" class="icono-clima">';
        		/*html += '<span class="ciudad">'+weather.city+'</span>';*/
        		/*html += '<p>'+weather.temp+'&deg; '+weather.units.temp+'<br /><span>'+weather.currently+'</span></p>';*/

        		html += '<p class="clima">'+weather.temp+'&deg; '+weather.units.temp+'<span class="clima">'+condiciones[weather.code]+' | <div id="Fecha_Reloj"></div> </span></p>';




        		
        		
        		
        		$("#weather").html(html);
    		},
    error: function(error) {
        $("#weather").html('<p>'+error+'</p>');
    }
});
</script>
</html>