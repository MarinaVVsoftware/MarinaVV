<?php
require_once 'vendor/autoload.php';
require "esp.php";

$loader = new Twig_Loader_FileSystem('templates');
$twig = new Twig_Environment($loader, [
    'degug' => true 
]);
$twig -> addGlobal('url', $_SERVER['SERVER_NAME']);
$twig -> addExtension(new Twig_Extension_Debug());

?>