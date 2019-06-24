<?php
    require "init.php";
    require "content/es/contact.php";

    $params = [
        'navbar' => $navbar,
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