<?php
namespace Classes;

use Controllers\Index;
use Controllers\Array_2_csv;
use Controllers\Array_2_json;
use Controllers\Array_2_xml;

Route::set('index.php',function(){
    Index::CreateView('Index');
});

Route::set('array_2_csv',function(){
    Array_2_csv::CreateView('Array_2_csv');
});

Route::set('array_2_json',function(){
    Array_2_json::CreateView('Array_2_json');
});

Route::set('array_2_xml',function(){
    Array_2_xml::CreateView('Array_2_xml');
});
?>