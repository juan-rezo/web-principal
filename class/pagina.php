<?php
require_once "class/principal.php";
class Paginas extends Principal{
    //atributos
    private $template;
    private $detalle;
    //metodos
    public function __construct()
    {
        $this->template = array();
    }
    /******************************/
    public function getContenidoTemplate($idseccion)
    {
        parent::conectar();
        $query = sprintf("SELECT 
                            nombre,
                            rutaImagen,
                            texto
                          FROM
                            seccion 
                          WHERE 
                            idseccion = %s ",
                            parent::comillas_inteligentes($idseccion)
                            
                        );
                        //echo $query; exit;
        $result = mysql_query($query);

        while ($reg = mysql_fetch_assoc($result)){
            $this->template[] = $reg;
        }
        return $this->template;
        
    }
/******************************************************************************/
/*****************LLenar Agenda************************************************/
    public function getContenidoAgenda($inicio,$CantEvent){
        parent::conectar();
        $query = sprintf("SELECT 
                           hora,
                           fecha,
                           lugar,
                           detalle
                          FROM
                            agenda
                          order by idagenda asc
		                  limit %s, %s ",
						      parent::comillas_inteligentes($inicio),
                              parent::comillas_inteligentes($CantEvent)
                              );
            $result = mysql_query($query);
            
            if (!$result)
                die ("sindatos en la bd");
            
            while($reg = mysql_fetch_assoc($result)){
                $this->template[] = $reg;
            }
            return $this->template;
        
    }
    
    //
    
}//fin clase

