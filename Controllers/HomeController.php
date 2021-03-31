<?php
namespace Controllers;
class HomeController extends Controller{
    public static function CreateView($viewName){
        require_once("./Views/$viewName.php");
    }

}

?>