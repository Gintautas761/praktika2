

<?php
use Controllers\HomeController;


Route::set('index.php',function(){
    HomeController::CreateView('index');
});


Route::set('array_2_csv',function(){
    HomeController::CreateView('array_2_csv');
});

Route::set('array_2_json',function(){
    HomeController::CreateView('array_2_json');
});

Route::set('array_2_xml',function(){
    HomeController::CreateView('array_2_xml');
});



?>

