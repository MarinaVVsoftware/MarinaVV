<?php
    require "init.php";

    $params = [
        'navbar' => $navbar,
        "hero" => $productsHero,
        "description" => $productsDescription,
        "gallery" => $productsGallery,
        "contact" => $productsNovoContact,
        "amenity" => $productsAmenity,
        'footer' => $footer
    ];
    $template = $twig->load('products.twig');
    echo $template->render($params);
?>