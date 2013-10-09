<?php 
   require_once "class/Pagina.php";
   require_once "class/noticias.php";
    
    $inicio=0;
    $CantEvent=5;
    $objAg =new Paginas();
    $datAgenda = $objAg->getContenidoAgenda($inicio,$CantEvent); 
    
    $UNinicio=0;
    $UNcantNot=3;
    $objUN= new Noticias();
    $datUN = $objUN->getUltimasNoticias($UNinicio,$UNcantNot);  
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Municipio de Delciais</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/indexphp.css">

	<!--CLIMA y reloj-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/jquery.simpleWeather.js"></script>
    <script type="text/javascript" src="js/reloj.js"></script>
    <script src="js/codiguito.js"></script>
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
  <!--********************************************************************-->              
				<?php 
                foreach($datUN as $dUN)
                {
                ?>
                <div id="contenedor-art">
				<article class="articulo">
					<div class="imagen-art">
						<img src="img/abstract2.jpg" alt=""> 
					</div>
					<div class="tit-art">
						<h2><?php echo $dUN["titulo"]; ?></h2>
					</div>
					<div class="parrafo-art">
						<?php echo Principal::myTruncate ($dUN["detalle"],200);?>
					</div>
					
				</article>
				<div class="btn-articulo">
						<a href="#">Ver Nota Completa</a><img>
					</div>
				</div><!--Fin contenedor art-->
                <?php 
                }
                ?>
    <!--******************************************************************-->            
				
			</section>
			<aside id="bderecha">
				<div class="tit-contenedores">
					<img src="img/vin.jpg">
					<h2>Agenda</h2>
				</div>
            <?php
				foreach($datAgenda as $datA){
			?>
				<div id="agenda">
                    
					<span id="evento" class="evento"><?php echo $datA["detalle"]?></span>
					<span class="lugar"><?php echo $datA["lugar"];?></span>
					<span class="hora"><?php echo $datA["hora"];?></span>
				</div>
            <?php 
                }
            ?>
			</aside>
			<!--<section id="carrusel">
				carrusel
			</section>-->
			<div id="footerline1">
				<img src="img/footerlinenuevo.png" alt="">
			</div>
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
					<li><a href="masterpage.php?id=4">El Escudo</a></li>
                    <li><a href="masterpage.php?id=2">Circulo del Reloj</a></li>
                    <li><a href="masterpage.php?id=3">Las Pizcadoras</a></li>
                    <li><a href="masterpage.php?id=1">Fuente de los Fundadores</a></li>
				</ul>
				
				<h2>Región</h2>
				<ul>
					
					<li><a href="http://www.delicias.gob.mx">Municipio de Delicias</a></li>
					<li><a href="http://www.meoqui.gob.mx/">Municipio de Meoqui</a></li>
					<li><a href="http://www.mpiosaucillo.gob.mx/">Municipio de Saucillo</a></li>
					<li><a href="http://www.julimes.gob.mx/">Municipio de Julimes</a></li>
				</ul>
			</div>
			<div class="img-pie">
				<img src="img/nuevo/reloj azul.jpg" alt="">
			</div>
			<div class="linkder">
				<ul>
					<h2>Enlaces de Interes</h2>
					<li><a href="">Plan Municipal de Desarrollo</a></li>
					<li><a href="http://www.presidencia.gob.mx/">Presidencia de la República</a></li>
					<li><a href="http://www.chihuahua.gob.mx/">Gobienrno del Estado de Chihuahua</a></li>
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
		<div id="footerline1">
				<img src="img/footerlinenuevo2.png" alt="">
		</div>
		<div id="pie-pagina-holder"></div>	
		<div id="pie-pagina">
			<h5>Circulo del Reloj Publico, Ote. #1, Col. Centro.</h5>
			<h5>Cd. Delicias, Chihuahua.</h5>
			<h5>Tel. (639)4708600</h5>
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
        		html = '<img style="float:left;" width="55px" src="'+weather.image+'">';
        		/*html += '<span class="ciudad">'+weather.city+'</span>';*/
        		/*html += '<p>'+weather.temp+'&deg; '+weather.units.temp+'<br /><span>'+weather.currently+'</span></p>';*/

        		html += '<p class="clima">'+weather.temp+'&deg; '+weather.units.temp+'<span class="clima">'+condiciones[weather.code]+'  | <div id="Fecha_Reloj"></div>';




        		
        		
        		
        		$("#weather").html(html);
    		},
    error: function(error) {
        $("#weather").html('<p>'+error+'</p>');
    }
});
</script>
</html>