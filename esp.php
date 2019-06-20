<?php
    require "content/es/principal.php";
    require "content/es/marinavv.php";
    
    $navbar = [
        [
            "name" => "MARINAS",
            "dropdown" => [
                [
                    "name" => "V&V",
                    "link" => "#"
                ],
                [
                    "name" => "NOVO CANCÚN",
                    "link" => "#"
                ]
            ]
        ],
        [
            "name" => "ASTILLERO",
            "link" => "#"
        ], 
        [   
            "name" => "PRODUCTOS",
            "link" => "#"
        ],
        [
            "name" => "CONTACTO",
            "link" => "#"
        ]

    ];

    $footer = [
        "address" => "Calle Vialidad Paseo Mujeres Manzana 1, Lote 1 Zona Continental Isla Mujeres Q. Roo.",
        "menu" => [
            [
                "text" => "Marina V&V",
                "link" => "#"
            ],
            [
                "text" => "Marina Novo",
                "link" => "#"
            ],
            [
                "text" => "Astillero",
                "link" => "#"
            ],
            [
                "text" => "Productos",
                "link" => "#"
            ],
            [
                "text" => "Contacto",
                "link" => "#"
            ]
        ]
    ]
?>