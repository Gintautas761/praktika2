<?php
    spl_autoload_register(function($className) 
    {
        include dirname(__FILE__) . '\\' . str_replace('\\', "/", $className) . '.php';
    });
?>


<?php 
        $title = 'index';
        require_once 'Views/Shared/header.php';
    ?>




<?php
    require_once('Classes/Routes.php');
?>

<?php require_once 'Views/Shared/footer.php'; ?>