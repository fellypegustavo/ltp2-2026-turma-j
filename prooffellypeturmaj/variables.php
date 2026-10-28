<?php

function produto($nome, $categoria, $status, $preco, $quantidade) {

    echo "Produtos loja informática<br><br>";
    echo "Nome: " . $nome . "<br>";
    echo "Categoria: " . $categoria . "<br>";
    echo "Status: " . $status . "<br>";
    echo "Preço: R$ " . $preco . "<br>";
    echo "Quantidade em Estoque: " . $quantidade . "<br><br>";

}

produto("Celular", "smartphone", "Vendido bastante", 4500.00, 30);
produto("Notebook", "Informática", "Em falta", 6200.00, 0);
produto("Cadeira Ergonômica", "Móvel", "Queridinha", 1200.00, 0);
produto("Fone de ouvido", "Periférico", "Procurado bastante", 350.00, 42);

?>
