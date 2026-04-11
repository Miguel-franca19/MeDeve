<?php

    //Exercicio 1
    $nome_alunos = ["Ana", "Gabriel", "Beatriz", "Gustavo", "Antonio"];

    echo $nome_alunos[0] . "<br>";
    echo $nome_alunos[4] . "<br>";


    //Exercicio2
    $produto = [
        "nome" => "Pastel",
        "preco" => 12.50,
        "quantiade" => 4

    ];

    echo "Nome do produto: " . $produto["nome"] . "<br>";
    echo "Preço do produto: " . $produto["preco"] . "<br>";

    //exercicio 3

    $clientes = [
        [
            "id" => 1,
            "nome" => "Ana",
            "saldo" => 150
        ],
        [
            "id" => 2,
            "nome" => "Bruno",
            "saldo" => -50
        ],
        [
            "id" => 3,
            "nome" => "Carlos",
            "saldo" => 300
        ]
    ];

?>