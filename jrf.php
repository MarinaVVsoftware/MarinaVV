<?php
    require "init.php";

    $params = [
        'navbar' => $navbar,
        'footer' => $footer
    ];
    $template = $twig->load('jrf.twig');
    echo $template->render($params);
?>