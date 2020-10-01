<?php
header('Access-Control-Allow-Origin: *');

if ($_SERVER["REQUEST_METHOD"] == "GET") {   
    $file = file_get_contents("piadas.json");
    echo $file;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {   }

if ($_SERVER["REQUEST_METHOD"] == "PUT") {   }

if ($_SERVER["REQUEST_METHOD"] == "DELETE") {   }



?>