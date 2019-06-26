<?php
require_once __DIR__.'/vendor/autoload.php';
require "es.php";

$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new Twig_Environment($loader, [
    'degug' => true 
]);
$twig -> addGlobal('url', $_SERVER['SERVER_NAME']);
$twig -> addExtension(new Twig_Extension_Debug());

?>