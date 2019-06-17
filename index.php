<?php
    require "init.php";

    $params = [
        'test' => "test",
        'navbar' => $navbar
    ];
    $template = $twig->load('index.twig');
    echo $template->render($params);
?>