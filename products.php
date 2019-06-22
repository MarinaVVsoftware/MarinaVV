<?php
    require "init.php";

    $params = [
        'navbar' => $navbar,
        "hero" => $productsHero,
        "description" => $productsDescription,
        "gallery" => $productsGallery,
        "amenity" => $productsAmenity,
        'footer' => $footer
    ];
    $template = $twig->load('marinas.twig');
    echo $template->render($params);
?>