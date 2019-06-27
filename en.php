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
                    "name" => "NOVO CANCUN",
                    "link" => "marinanovo"
                ],
                [
                    "name" => "V&V",
                    "link" => "marinavv"
                ]
            ]
        ],
        [
            "name" => "SHIPYARD",
            "link" => "shipyard"
        ], 
        [   
            "name" => "PRODUCTS",
            "link" => "products"
        ],
        [
            "name" => "CONTACT",
            "link" => "contact"
        ]

    ];

    $footer = [
        "address" => "Streeth Vialidad Paseo Mujeres Manzana 1, Lote 1 Zona Continental Isla Mujeres Q. Roo.",
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
                "text" => "Shipyard",
                "link" => "shipyard"
            ],
            [
                "text" => "Products",
                "link" => "products"
            ],
            [
                "text" => "Contact",
                "link" => "contact"
            ]
        ]
    ]
?>