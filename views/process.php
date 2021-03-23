<?php
$comment = $_POST["comment"];
$file = "failas.txt";
file_put_contents($file, $comment);
header('Location:Http://localhost:7882');



?>