<?php 
require_once('models/Buscador.php');

class AjaxController{
    public function buscar(){
        if($_SERVER['REQUEST_METHOD']==='POST'){
             if(!empty($_POST['elemento'])){
                $buscador = new Buscador();
                $buscador->setElemento($_POST['elemento']);
                $resultado = $buscador->buscar();
                echo json_encode($resultado);
             }else{
                echo json_encode("Campo vacio");
             }
        }
    }
}






?>