<?php
namespace Controllers;

class Controller{        
       //sukuria views
        public static function CreateView($viewName){
            require_once("./Views/$viewName.php");
        }
}

?>