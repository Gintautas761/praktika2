

<?php

Route::set('index.php',function(){
    Index::CreateView('index');
});


Route::set('array_2_csv',function(){
    Array_2_csv::CreateView('array_2_csv');
});

Route::set('array_2_json',function(){
    Array_2_json::CreateView('array_2_json');
});

Route::set('array_2_xml',function(){
    Array_2_xml::CreateView('array_2_xml');
});

Route::set('index1',function(){
    HomeController::CreateView('index1');
});

Route::set('create',function(){
    CreateController::CreateView('create');
});


Route::set('delete',function(){
    DeleteController::CreateView('delete');
});

Route::set('read',function(){
    ReadController::CreateView('read');
});

Route::set('update',function(){
    UpdateController::CreateView('update');
});


?>

