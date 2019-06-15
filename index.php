<?php
    require "init.php";

    $params = [
        'test' => "test"
    ];
    $template = $twig->load('index.twig');
    echo $template->render($params);
?>