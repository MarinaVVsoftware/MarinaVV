<?php
    require "init.php";

    $params = [
        'navbar' => $navbar,
        "hero" => $marinavvHero,
        "description" => $marinavvDescription,
        "gallery" => $marinavvGallery,
        "services" => $marinavvServices,
        "amenity" => $marinavvAmenity,
        "contact" => $marinavvContact,
        "location" => $marinavvLocation,
        'footer' => $footer
    ];
    $template = $twig->load('marinas.twig');
    echo $template->render($params);
?>