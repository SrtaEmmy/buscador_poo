<?php 
 
function autoload_controller($classname){
    include('controllers/'.$classname.'.php');
}  
spl_autoload_register('autoload_controller');
 
 
?>