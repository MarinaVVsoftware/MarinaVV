<?php
    require "./init.php";

    $params = [
        'navbar' => $navbar,
        'htmlLanguage' => $htmlLanguage,
        'languageToChange' => $languageToChange,
        "title404" => $title404,
        "buttonText404" => $buttonText404,
        'footer' => $footer
    ];
    $template = $twig->load('notFound.twig');
    echo $template->render($params);
?>