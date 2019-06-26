<?php
    require "init.php";

    $params = [
        'navbar' => $navbar,
        'htmlLanguage' => $htmlLanguage,
        'languageToChange' => $languageToChange,
        "hero" => $marinaNovoHero,
        "description" => $marinaNovoDescription,
        "gallery" => $marinaNovoGallery,
        "services" => $marinaNovoServices,
        "amenity" => $marinaNovoAmenity,
        "contact" => $marinaNovoContact,
        "location" => $marinaNovoLocation,
        'footer' => $footer
    ];
    $template = $twig->load('marinas.twig');
    echo $template->render($params);
?>