<?php
       spl_autoload_register(function($className)
       {
              include dirname(__FILE__) . '\\' . str_replace('\\', "/", $className) . '.php';
             
       });
        $title = 'index';
        require_once 'Views/Shared/header.php';
        require_once ('Routes.php');
        require_once 'Views/Shared/footer.php';    
?>
