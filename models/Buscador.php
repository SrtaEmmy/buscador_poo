<?php 
 
class Buscador{
    public $elemento;
    public $db;

    public function __construct(){
        $this->db = Database::connect();
    }


    /**
     * Get the value of elemento
     */ 
    public function getElemento()
    {
        return $this->elemento;
    }

    /**
     * Set the value of elemento
     *
     * @return  self
     */ 
    public function setElemento($elemento)
    {
        $this->elemento = $elemento;

        return $this;
    }

    public function buscar(){
        $elemento = $this->getElemento();
        $sql = "SELECT * FROM coches WHERE marca LIKE '%$elemento%' UNION SELECT * FROM motos WHERE marca LIKE '%$elemento%'";
        $result = $this->db->query($sql);

        $elementos = array();
        if($result->num_rows > 0){

            while ($row = $result->fetch_assoc()) { 
              $elementos[] = $this->setElemento($row['marca']);
            
            }
            return $elementos;
        }else{
            return false; //no hay elementos 
        }


    }
}  
 
 
?>