<?php
    require "content/en/principal.php";
    require "content/en/marinavv.php";
    require "content/en/marinaNovo.php";
    require "content/en/products.php";
    require "content/en/shipyard.php";
    require "content/en/contact.php";
    
    $htmlLanguage = 'en';

    $languageToChange = 'es';

    $navbar = [
        [
            "name" => "MARINAS",
            "dropdown" => [
                [
                    "name" => "NOVO CANCÚN",
                    "link" => "marinanovo"
                ],
                [
                    "name" => "V&V",
                    "link" => "marinavv"
                ]
            ]
        ],
        [
            "name" => "ASTILLERO",
            "link" => "shipyard"
        ], 
        [   
            "name" => "PRODUCTOS",
            "link" => "products"
        ],
        [
            "name" => "CONTACTO",
            "link" => "contact"
        ]

    ];

    $footer = [
        "address" => "Calle Vialidad Paseo Mujeres Manzana 1, Lote 1 Zona Continental Isla Mujeres Q. Roo.",
        "menu" => [
            [
                "text" => "Marina V&V",
                "link" => "marinavv"
            ],
            [
                "text" => "Marina Novo",
                "link" => "marinanovo"
            ],
            [
                "text" => "Astillero",
                "link" => "shipyard"
            ],
            [
                "text" => "Productos",
                "link" => "products"
            ],
            [
                "text" => "Contacto",
                "link" => "contact"
            ]
        ]
    ]
?>