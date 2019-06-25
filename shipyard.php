<?php
    require "init.php";

    $params = [
        
        'navbar' => $navbar,
        "hero" => $shipyardHero,
        "description" => $shipyardDescription,
        "services" => $shipyardServices,
        "contact"=>$shipyardContact,
        'footer' => $footer
    ];
    $template = $twig->load('shipyard.twig');
    echo $template->render($params);
?>