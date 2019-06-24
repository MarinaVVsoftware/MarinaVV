<?php
    require "init.php";
    require "content/es/contact.php";

    $params = [
        'navbar' => $navbar,
        'placeholder' => $placeholder,
        'labels'=> $labels,
        'footer' => $footer
    ];
    $template = $twig->load('contact.twig');
    echo $template->render($params);
?>