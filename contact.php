<?php
    require "init.php";

    $params = [
        'navbar' => $navbar,
        'htmlLanguage' => $htmlLanguage,
        'languageToChange' => $languageToChange,
        "title" => $title,
        "buttonText" => $buttonText,
        'placeholder' => $placeholder,
        'location' => $contactLocation,
        'contactsVS' =>$contactVS,
        'contactVE'=>$contactVE,
        'contactAC'=>$contactAC,
        'direc'=>$direc,
        'labels'=> $labels,
        'footer' => $footer
    ];
    $template = $twig->load('contact.twig');
    echo $template->render($params);
?>