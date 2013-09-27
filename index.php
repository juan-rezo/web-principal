<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Municipio de Delciais</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/indexphp.css">

	<!--CLIMA y reloj-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="js/jquery.simpleWeather.js"></script>
    <script type="text/javascript" src="js/reloj.js"></script>
</head>
<body onload="actualizaReloj();">
	<section id="wrapper">
		<section id="clima">
			<div id="weather">
			</div>
		</section>
		<header>
			<h1>
				<a href="">
					<img src="img/nuevo/logo2013300.png" alt="Ayuntamiento 2013-2016" class="logo">
				</a>
			</h1>
			<nav>
				<ul>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Tramites y Servicios</a></li>
					<li><a href="#">Directorio</a></li>
					<li><a href="#">Transparencia y Rendicion de Cuentas</a></li>
				</ul>
			</nav>
		</header>
		<section id="galeria">
			galeria
		</section>
		<section id="contenido">
			
			<section id="bizquierda">
				<div class="tit-contenedores">
					<img src="img/vin.jpg">
					<h2>Ultimas Noticias</h2>
				</div>
				
				

				<article class="articulo">
					<div class="imagen-art">
						<img src="img/abstract2.jpg" alt=""> 
					</div>
					<div class="tit-art">
						<h2>Boletin #1</h2>
					</div>
					<div class="parrafo-art">
						<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man.</p>
					</div>
				</article>
				<article class="articulo">
					<div class="imagen-art">
						<img src="img/abstract2.jpg" alt=""> 
					</div>
					<div class="tit-art">
						<h2>Boletin #1</h2>
					</div>
					<div class="parrafo-art">
						<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man.</p>
					</div>
				</article>
				<article class="articulo">
					<div class="imagen-art">
						<img src="img/abstract2.jpg" alt=""> 
					</div>
					<div class="tit-art">
						<h2>Boletin #1</h2>
					</div>
					<div class="parrafo-art">
						<p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man.</p>
					</div>
				</article>

			</section>
			<aside id="bderecha">
				<h2>Agenda del Alcalde</h2>
			</aside>
			<!--<section id="carrusel">
				carrusel
			</section>-->
		</section>
		
		<footer>
			<div class="linkizq">
				
				<h2>Gobierno</h2>
				<ul>
					
					<li><a href="">Presidente</a></li>
					<li><a href="">Sindico</a></li>
					<li><a href="">Regidores</a></li>
					<li><a href="">Gabinete</a></li>
				</ul>
				
				<h2>La Ciudad</h2>
				<ul>
					<li><a href="">El Escudo</a></li>
					<li><a href="">Circulo del Reloj</a></li>
					<li><a href="">Las Pizcadoras</a></li>
					<li><a href="">Fuente de los Fundadores</a></li>
				</ul>
				
				<h2>Región</h2>
				<ul>
					
					<li><a href="">Municipio de Delicias</a></li>
					<li><a href="">Municipio de Meoqui</a></li>
					<li><a href="">Municipio de Saucillo</a></li>
					<li><a href="">Municipio de Julimes</a></li>
				</ul>
			</div>
			<div class="img-pie">
				<img src="img/nuevo/reloj azul.jpg" alt="">
			</div>
			<div class="linkder">
				<ul>
					<h2>Enlaces de Interes</h2>
					<li><a href="">Plan Municipal de Desarrollo</a></li>
					<li><a href="">Presidencia de la República</a></li>
					<li><a href="">Gobienrno del Estado de Chihuahua</a></li>
					<li><a href="">Otros Sitios</a></li>
				</ul>

				<ul>
					<h2>Micrositios</h2>
					<li><a href="">Instituto Municipal del Deporte</a></li>
					<li><a href="">Instituto Municipal de Arte y Cultura</a></li>
					<li><a href="">Guia Turistica de Delcias</a></li>
					<li><a href="">Sistema Municipa DIF</a></li>
				</ul>

				<ul>
					<h2>Enlaces de Interes</h2>
					<li><a href="">Plan Municipal de Desarrollo</a></li>
					<li><a href="">Presidencia de la República</a></li>
					<li><a href="">Gobienrno del Estado de Chihuahua</a></li>
					<li><a href="">Otros Sitios</a></li>
				</ul>
			</div>
			
		</footer>
		
	</section>
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

        		
        		/*html = '<img  src="clima/icons/'+weather.code+'.png" class="icono-clima">';*/
        		html = '<img style="float:left;" width="64px" src="'+weather.image+'">';
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