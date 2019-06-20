<?php
    require "init.php";

    $params = [
        
        'navbar' => $navbar,
        'footer' => $footer
    ];
    $template = $twig->load('astillero.twig');
    echo $template->render($params);
?>