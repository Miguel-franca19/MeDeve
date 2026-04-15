<?php

//DESAFIO 1
$usuarios = [
    [
        "nome" => "ronaldo",
        "perfil" => "admin"
    ],
    [
        "nome" => "Heber",
        "perfil" => "user"
    ],
    [
        "nome" => "bartolomeu",
        "perfil" => "user"
    ]
];

foreach($usuarios as $user){
    echo $user["nome"]."<br>";
    echo $user["perfil"]."<br>";
    echo "<hr>";
}

//DESAFIO 2
$contas = [
    [
        "id" => 0,
        "nome" => "Daniel duarte",
        "descricao" => "me pagar por mudar as mesas",
        "tipo" => "receber",
        "valor" => 15.50
    ],
    [
        "id" => 1,
        "nome" => "Murilo Targa",
        "descricao" => "Almoço",
        "tipo" => "pagar",
        "valor" => 35.50
    ],
    [
        "id" => 2,
        "nome" => "Kuty",
        "descricao" => "Uber",
        "tipo" => "receber",
        "valor" => 20.80
    ],
    [
        "id" => 3,
        "nome" => "Aline",
        "descricao" => "Salgados",
        "tipo" => "receber",
        "valor" => 150.00
    ],
    [
        "id" => 4,
        "nome" => "Marcelo",
        "descricao" => "MecDonalds",
        "tipo" => "receber",
        "valor" => 200.00
    ],
    [
        "id" => 5,
        "nome" => "Luis Otavio",
        "descricao" => "Jogo na Steam",
        "tipo" => "receber",
        "valor" => 46.00
    ],
    [
        "id" => 6,
        "nome" => "Dorival",
        "descricao" => "placa de video",
        "tipo" => "receber",
        "valor" => 450.00
    ],
    [
        "id" => 7,
        "nome" => "Gustavo",
        "descricao" => "gabinete",
        "tipo" => "pagar",
        "valor" => 150.00
    ],
    [
        "id" => 8,
        "nome" => "Ana clara",
        "descricao" => "Bala de goma",
        "tipo" => "pagar",
        "valor" => 3.00
    ],
    [
        "id" => 9,
        "nome" => "Eros",
        "descricao" => "Caderno",
        "tipo" => "pagar",
        "valor" => 36.00
    ],

];

foreach($contas as $cont){
    if($cont["tipo"] == "receber"){
        echo $cont["nome"]."<br>";
        echo $cont["valor"]."<br>";
        echo $cont["tipo"]."<br>";
        echo "<hr>";
    }
}

?>