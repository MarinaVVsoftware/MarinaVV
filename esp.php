<?php
    require "content/es/principal.php";
    require "content/es/marinavv.php";
    require "content/es/marinaNovo.php";
    require "content/es/products.php";
    require "content/es/shipyard.php";
    
    $navbar = [
        [
            "name" => "MARINAS",
            "dropdown" => [
                [
                    "name" => "NOVO CANCÚN",
                    "link" => "marinanovo.php"
                ],
                [
                    "name" => "V&V",
                    "link" => "marinavv.php"
                ]
            ]
        ],
        [
            "name" => "ASTILLERO",
            "link" => "astillero.php"
        ], 
        [   
            "name" => "PRODUCTOS",
            "link" => "products.php"
        ],
        [
            "name" => "CONTACTO",
            "link" => "contact.php"
        ]

    ];

    $footer = [
        "address" => "Calle Vialidad Paseo Mujeres Manzana 1, Lote 1 Zona Continental Isla Mujeres Q. Roo.",
        "menu" => [
            [
                "text" => "Marina V&V",
                "link" => "marinavv.php"
            ],
            [
                "text" => "Marina Novo",
                "link" => "marinanovo.php"
            ],
            [
                "text" => "Astillero",
                "link" => "astillero.php"
            ],
            [
                "text" => "Productos",
                "link" => "products.php"
            ],
            [
                "text" => "Contacto",
                "link" => "contact.php"
            ]
        ]
    ]
?>