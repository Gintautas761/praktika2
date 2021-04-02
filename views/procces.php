<?php

$comment = $_POST["comment"];
//Get the file extension
$file = "failas.txt";
//Write the text
file_put_contents($file, $comment);
//send user back to the index page to view changees
header("Location:http://localhost/");
?>