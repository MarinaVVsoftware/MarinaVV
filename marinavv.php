<?php
    require "init.php";

    $params = [
        'navbar' => $navbar,
        "hero" => $hero,
        "description" => $description,
        "gallery" => $gallery,
        "services" => $services,
        "amenity" => $amenity,
        "contact" => $contact,
        "location" => $location,
        'footer' => $footer
    ];
    $template = $twig->load('marinas.twig');
    echo $template->render($params);
?>