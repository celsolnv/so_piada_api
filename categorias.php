<?php
header('Access-Control-Allow-Origin: *');
$file = file_get_contents("categorias.json");

echo $file;

?>