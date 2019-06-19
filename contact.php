<?php
    require "init.php";

    $params = [
        'navbar' => $navbar,
        'footer' => $footer
    ];
    $template = $twig->load('contact.twig');
    echo $template->render($params);
?>