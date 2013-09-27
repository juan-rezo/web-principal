<?php
require_once "principal.php";

class Noticias extends Principal{
	//Atributos
	private $noticias;
	private $tNot; //Total de noticias

	//Metodos

	public function __cosntruct(){
		$this->noticia = array();
	}

	//publica las noticias en el index
	//cantNot= nuemro de noticias que apareceran , inicio = noticia desde la cual se iniciara la busqueda
	public function getNoticias($inicio,$cantNot){
		parent::conectar();

		$query = sprintf(
						"select
						n.idnoticia,
						n.titulo,
						n.detalle,
						n.idcategoria,
						a.nombre,
						n.fecha,
						dayname(n.fecha) as dia,
						n.hora
						from
						noticia as n,
						autor as a
						where
						n.idautor=a.idautor
						order by idnoticia DESC
						limit %s,%s;",
						parent::comillas_inteligentes($inicio),
						parent::comillas_inteligentes($cantNot)
					);
		//echo $query;exit;//intruccion para verificar el query
		$result = mysql_query($query)
            or die("Error en la consulta SQL");
			
			if(!$result)
				die("Regrese más tarde");

			while ($reg = mysql_fetch_assoc($result)) {
				$this->noticia[] = $reg;
			}

			return $this->noticia;
	} //Fin noticias
/******************************************************************************************/
/******************TOTAL NOTICIAS *********************************************************/
    public function TotalNoticias(){
			$query = "select count(*) as total from noticia";
            parent::Conectar();
			$result = mysql_query($query)
                or die("Error en la consulta SQL");
			
			if ($reg = mysql_fetch_array($result)) {
				$this->tNot = $reg["total"];
			}
			
			return $this->tNot;
		}//fin TotalNoticias
/******************************************************************************************/
/********************************************************Ntocias por ID********************/
	Public function NoticiaPorId($id){
		parent::Conectar();
		$query = sprintf(
				 			"SELECT n.idnoticia, n.titulo, n.detalle, n.fecha,DAYNAME (n.fecha) as dia, n.hora, a.nombre
				 			 FROM
				 			 noticia as n,
				 			 autor as a
				 			 WHERE
				 			 idnoticia= %s
				 			 and 
				 			 a.idautor = n.idautor;",
				 			 parent::comillas_inteligentes($id)
                        );
		$result = mysql_query($query);
		while ($reg = mysql_fetch_assoc($result)){
			$this->noticia[] = $reg;
		}
		return $this->noticia;


	}//fin NociaPorId

}//Fin clase

?>
