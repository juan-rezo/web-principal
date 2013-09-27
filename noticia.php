<?php
require_once "class/principal.php";
require_once "class/noticias.php";
$obj = new principal();
$objN = new noticias();


$id =2;
$datos = $objN->NoticiaPorId($id);



?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title><?php echo $datos[0]["titulo"];?></title>
		<meta charset="UTF-8">
		<link href="css/estilos.css" type="text/css" rel="stylesheet" />
		<link href="css/formulario.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="wrapper">
			<header>
				<h1>HEADER</h1>
				<nav>
					<ul>
						<li>
							<a href="#">
								Home
							</a>
						</li>
						<li>
							<a href="#">
								xxxxx
							</a>
						</li>
						<li>
							<a href="#">
								xxxxx
							</a>
						</li>
						<li>
							<a href="#">
								Contacto
							</a>
						</li>
					</ul>
				</nav>
			</header>
			<div id="contenido">
				<div id="post">
                
					<article>
						<div class="tituloPost">
							<h2><?php echo $datos[0]["titulo"];?></h2>
						</div>
						<div class="fecha">
                        
                            <?php echo principal::diaLetra($datos[0]["dia"]); ?>
                            <?php echo principal::invierteFecha($datos[0]["fecha"]); ?>
							
						</div>
						<div class="contenidoPost">
							<p>
								<?php echo $datos[0]["detalle"]; ?>
							</p>
						</div>
						
					</article>
               
					
				</div><!--Fin de Post -->
				
                
			</div>
		</div>	<!-- Fin #wrapper -->
	</body>
</html>