<?php
    require "init.php";

    $params = [
        'test' => "test",
        'navbar' => $navbar,
        'principalTitle' => $principalTitle,
        'aboutUs' => $aboutUs,
        'nationalQuality' => $nationalQuality,
        'explorevv' => $explorevv,
        'contactInfo' => $contactInfo,
        'footer' => $footer
    ];
    $template = $twig->load('index.twig');
    echo $template->render($params);
?>