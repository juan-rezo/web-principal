<?php
require_once "class/principal.php";
require_once "class/noticias.php";
//$obj = new principal();

$objN = new noticias();
$cantNot = "15"; //noticias por pagina

/*****Crontola la variable inicio*************************/
if (isset($_GET["pos"])){
    $inicio = $_GET["pos"];//si existe $_GET la variable $inicio toma el su valor
}else{
    $inicio= 0;//sino existe $_GET la variable $inicio toma valor de 0
}
//echo $inicio;
/***************************************/

$datos = $objN->getNoticias($inicio,$cantNot);

$total = $objN->TotalNoticias();

$cantPag = $total/$cantNot;

if (isset ($_GET["pos"]) and $_GET["pos"]>0){
	$actual = $_GET["pos"]/$cantNot+1;
} else{
	$actual =1;
}
//echo $actual;

//echo $total;


?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Mi Blog Personal</title>
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
                <?php
						foreach($datos as $d){
				?>
					<article>
						<div class="tituloPost">
							<h2><?php echo $d["titulo"];?></h2>
						</div>
						<div class="fecha">
                        
                            <?php echo principal::diaLetra($d["dia"]); ?>
                            <?php echo principal::invierteFecha($d["fecha"]); ?>
							
						</div>
						<div class="contenidoPost">
							<p>
								<?php echo principal::myTruncate($d["detalle"],"250"); ?>
							</p>
						</div>
						<div class="piePost">
							Leer Más 
						</div>
					</article>
                <?php
                    }    
                ?>
					<!--******* PAGINACION *********-->
					<div id="paginacion">
						<?php
							if($inicio==0){ // si el valor de inicio es 0 se desabilita el link 
								            // y se muestra en negritas.
						?>                  
							<span class="negrita">Anterior</span>
						<?php
							}else{ // se asigna pos con el valor para retroceder 
						?>
							<a href="?pos=<?php echo $inicio-$cantNot; ?>">Anterior</a>
						<?php
							}
						?>
						
						<?php
							$a=0;
							$ultimaPag = 0;
							
							if ($actual>6) {
								echo "...";
							}
							
							for ($i=1; $i <=$cantPag ; $i++) {
								if($i>=$actual-5 && $i<=$actual+5){ //imprime 5 #depagina antes y 5 despues dela pagina activa
									if ($i == $actual) {
							?>	
										<span class="negrita"><?php echo $i; ?> </span>
							<?php		
									} else {
							?>
									<a href="?pos=<?php echo $a;?>"><?php echo $i." ";?></a>
							<?php
									}
								}
								$a+=$cantNot;
								$ultimaPag++;
							}
							
							$final = $ultimaPag*$cantNot;
							$resto = $total-$final;
							
							if ($final<$total) {
								$ultimaPag++;
								
								if ($actual==$ultimaPag) {
						?>
							<span class="negrita"><?php echo $ultimaPag; ?></span>
						<?php
								}else{
						?>
								<a href="?pos=<?php echo $final; ?>"><?php echo $ultimaPag; ?></a>
						<?php
								}
								
							}
							
							if ($ultimaPag-$actual>5) {
								echo "...";
							}
						?>
						
						<?php
							if ($ultimaPag==$actual) {
						?>
								<span class="negrita">Siguiente</span>
						<?php
							} else {
						?>
								<a href="?pos=<?php echo $inicio+$cantNot; ?>">Siguiente</a>
						<?php
							}
							
						?>
						
						
					
					
					</div><!--***************************Fin de paginacion -->
				</div><!--Fin de Post -->
				
                <div id="sidebar">
					<div class="widget">
						<div class="tituloWidget">
							<h3>Buscar</h3>
						</div>

						<div id="busquedaWidget">
	 						
	 						<form id="busqueda" action="" method="post">
	 							<fieldset>
	 								<p>
	 									
	 									<input id="name" name="busqueda" type="text" class="text" value="" />
	 								</p>
	 
									<p>
	 									<button id="registerNew" type="submit">Buscar</button>
	 								</p>
	 							</fieldset>
	 
	 						</form>
	 					</div><!-- Fin formulario de Busqueda-->
						
						<div class="contenidoWidget">
							<ul>
								<li>Categoría 1</li>
								<li>Categoría 2</li>
								<li>Categoría 3</li>
								<li>Categoría 4</li>
								<li>Categoría 5</li>
							</ul>
						</div><!--FIn categorias -->
					</div><!--Fin Widget -->
				<!--</div>--><!--Fin Sidebar -->
			</div>
		</div>	<!-- Fin #wrapper -->
	</body>
</html>