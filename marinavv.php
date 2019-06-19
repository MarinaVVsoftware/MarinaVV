<?php
    require "init.php";

    $params = [
        'navbar' => $navbar,
        'footer' => $footer
    ];
    $template = $twig->load('marinas.twig');
    echo $template->render($params);
?>