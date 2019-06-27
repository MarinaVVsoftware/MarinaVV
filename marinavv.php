<?php
    require "init.php";

    $params = [
        'navbar' => $navbar,
        'htmlLanguage' => $htmlLanguage,
        'languageToChange' => $languageToChange,
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