<?php
header('Access-Control-Allow-Origin: *');
$file = file_get_contents("piadas.json");

echo $file;

?>