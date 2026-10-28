<?php

//3º avaliaçao LTP2:

echo "OPERADORES<br><br>";

function somar($n1, $n2)
{
    echo "Soma<br>";
    $resultadosoma=$n1+$n2;
    echo "O resultado da soma de dois números é: ",$resultadosoma,"<br><br>";
}
somar(8, 40);

function subtrair($n1, $n2)
{
    echo "Subtração<br>";
    $resultadosubtracao=$n1-$n2;
    echo "O resultado da subtração de dois números é: ",$resultadosubtracao,"<br><br>";
}
subtrair(8, 40);

function multiplicar($n1, $n2)
{
    echo "Multiplicação<br>";
    $resultadomultiplicacao=$n1*$n2;
    echo "O resultado da multiplicação de dois números é: ",$resultadomultiplicacao,"<br><br>";
}
multiplicar(8, 40);

function dividir($n1, $n2)
{
    echo "Divisão<br>";
    $resultadodivisao=$n1/$n2;
    echo "O resultado da divisão de dois números é: ",$resultadodivisao,"<br><br>";
}
dividir(8, 40);

function desconto($preco, $desconto)
{
    echo "Desconto do dogão<br>";
    $precoFina = $preco - $desconto;
    echo "O preço final do produto com desconto é: ", $precoFina, "<br><br>";
}
desconto(40, 8);

?>