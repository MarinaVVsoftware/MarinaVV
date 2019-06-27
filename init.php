<?php
require_once __DIR__.'/vendor/autoload.php';

$language = isset($_COOKIE["Language"]) ? $_COOKIE["Language"] : setcookie("Language", 'es', time() + 31556926, '/');

switch($language){
    case "en":
        require "en.php";
        break;
    case "es":
        require "es.php";
        break;
    default:
        require "en.php";
}

$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new Twig_Environment($loader, [
    'degug' => true 
]);
$twig -> addGlobal('url', $_SERVER['SERVER_NAME']);
$twig -> addExtension(new Twig_Extension_Debug());

?>