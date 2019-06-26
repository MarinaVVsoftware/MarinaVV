<?php
    require "content/es/principal.php";
    require "content/es/marinavv.php";
    require "content/es/marinaNovo.php";
    require "content/es/products.php";
    require "content/es/shipyard.php";
    require "content/es/contact.php";
    
    $htmlLanguage = 'es';

    $languageToChange = 'en';

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