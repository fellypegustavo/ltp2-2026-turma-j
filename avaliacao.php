<?php

$estoque_informatica =

[
    ["id" => 1001, "nome" => "Memórias Póstumas de Brás Cubas", "qtd" => 30,
     "preço" => 50.00, "tipo" => "Literatura Brasileira"],
    ["id" => 1002, "nome" => "Harry Potter", "qtd" => 60,
     "preço" => 80.00, "tipo" => "Saga de fantasia"],
    ["id" => 1003, "nome" => "Dom Quixote", "qtd" => 20,
     "preço" => 25.00, "tipo" => "Literatura Brasileira"],
    ["id" => 1004, "nome" => "O Senhor dos Anéis", "qtd" => 60,
     "preço" => 100.00, "tipo" => "Saga"],
    ["id" => 1005, "nome" => "Grande Sertão: Veredas", "qtd" => 20,
     "preço" => 50.00, "tipo" => "Literatura Brasileira"],
    ["id" => 1006, "nome" => "Jogos Vorazes", "qtd" => 80,
     "preço" => 120.00, "tipo" => "Trilogia"],
    ["id" => 1007, "nome" => "Game of thrones", "qtd" => 60,
     "preço" => 80.00, "tipo" => "saga clássica"],
    ["id" => 1008, "nome" => "Duna", "qtd" => 20,
     "preço" => 50.00, "tipo" => "Saga de ficção"],
    ["id" => 1009, "nome" => "Demon Slayer", "qtd" => 70,
     "preço" => 30.00, "tipo" => "Mangá"],
    ["id" => 1010, "nome" => "Naruto", "qtd" => 30,
     "preço" => 25.00, "tipo" => "Mangá"],
];

echo "<h2>          Relatório de Estoque de Livros 📚</h2>";

// Início da tabela para organizar os dados visualmente;
echo "<table border='1' cellpadding='10'
style='border-collapse: collapse; largura: 100%;'>";

echo "<tr style='background-color: #4cbb57;'>
        <th>ID</th>
        <th>Livros</th>
        <th>Tipo</th>
        <th>Qtd</th>
        <th>Preço Unitário</th>
        <th>Total em Estoque</th>
      </tr>";

// O foreach percorre cada 'sub-array' (cada produto)
foreach ($estoque_informatica as $indice) {

    $valor_total_item = $indice['qtd'] * $indice['preço'];

    echo "<tr>";
    echo "<td>" . $indice['id'] . "</td>";
    echo "<td>" . $indice['nome'] . "</td>";
    echo "<td>" . $indice['tipo'] . "</td>";
    echo "<td>" . $indice['qtd'] . "</td>";
    echo "<td>R$ " . number_format($indice['preço'], 2, ',', '.') . "</td>";
    echo "<td>R$ " . number_format($valor_total_item, 2, ',', '.') . "</td>";
    echo "</tr>";
}

echo "</table>";

?>
