<?php
    require "init.php";

    $params = [
        'test' => "test",
        'navbar' => $navbar
    ];
    $template = $twig->load('astillero.twig');
    echo $template->render($params);
?>