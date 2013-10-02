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
    public function getContenidoTemplate($idlugar,$idseccion)
    {
        parent::conectar();
        $query = sprintf("SELECT 
                            detalle 
                            FROM
                            lugarseccion 
                            WHERE 
                            idlugar = %s and idseccion = %s;",
                            parent::comillas_inteligentes($idlugar),
                            parent::comillas_inteligentes($idseccion)
                        );
                        //echo $query;
        $result = mysql_query($query);

        while ($reg = mysql_fetch_array($result)){
            $this->template = $reg["detalle"];
        }
        
        
    }
    
}//fin clase

