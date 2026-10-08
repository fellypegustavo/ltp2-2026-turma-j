<?php

echo "Olá pessoal, sejam bem vindos ao curso de LTP2-
     Linguagem e Técnicas de Programação 2!<br>";
function cadastro($tutor, $datanascimento, $primeiropet, $segundopet, $terceiropet, 
                    $quartopet, $cor1, $cor2, $cor3, $cor4, $raca, $raca2, $raca3, $raca4)
{
/*$tutor=["Wellington Ribeiro do Nascimento","Fulano Ribeiro do Nascimento","Beltrano Ribeiro do Nascimento"];
$datanascimento=["06/10/1977","15/10/1999","14/08/2005"];
$primeiropet=["Safira","totó","chuvisco"];
$segundopet=["Hoshi","gigante", "kiko"];
$terceiropet=["Nikita","Aika","Lobão"];
$quartopet=["T'Challa","Valkyria","Luna"];
$cor1=["Preto","caramelo", "Malhado"];
$cor2=["Branco","Preto", "cinza"];
$cor3=["Caramelo","Caramelo","Branco"];
$cor4=["Caramelo","Caramelo","Branco"];
$raca=["PitBull","Pastor Alemão", "Dalmata"];
$raca2=["SRD = Sem Raça Definida","Pastor Belga de Malinoar", "Husk Siberiano"];
$raca3=["PitBull","Pastor Alemão", "Dalmata"];
$raca4=["PitBull","Pastor Alemão", "Dalmata"];*/

/*cadastro(
    ["Wellington Ribeiro do Nascimento","Fulano Ribeiro do Nascimento","Beltrano Ribeiro do Nascimento"], 
    ["06/10/1977","15/10/1999","14/08/2005"], 
    ["Safira","totó","chuvisco"], 
    ["Hoshi","gigante", "kiko"], 
    ["Nikita","Aika","Lobão"], 
    ["T'Challa","Valkyria","Luna"], 
    ["Preto","caramelo", "Malhado"], 
    ["Branco","Preto", "cinza"], 
    ["Caramelo","Caramelo","Branco"], 
    ["Caramelo","Caramelo","Branco"], 
    ["PitBull","Pastor Alemão", "Dalmata"], 
    ["SRD = Sem Raça Definida","Pastor Belga de Malinoar", "Husk Siberiano"], 
    ["PitBull","Pastor Alemão", "Dalmata"], 
    ["PitBull","Pastor Alemão", "Dalmata"]
)*/

echo "O nome do tutor é: " . $tutor[2]."<br>";
echo "A data de nascimento do tutor é: " . $datanascimento[2]."<br>";
echo "O nome do primeito pet é: " . $primeiropet[2]."<br>";
echo "O nome do segundo pet é:  " . $segundopet[2]."<br>";
echo "O nome do terceiro pet é: " . $terceiropet[2]."<br>";
echo "O nome do quarto pet é:  " . $quartopet[2]."<br>";
echo "A cor do primeiro pet é: " . $cor1[2]."<br>";
echo "A cor do segundo pet é: " . $cor2[2]."<br>";
echo "A cor do terceiro pet é: " . $cor3[2]."<br>";
echo "A cor do quarto pet é: " . $cor4[2]."<br>";
echo "A raça do primeiro pet é: " . $raca[2]."<br>";
echo "A raça do segundo pet é: " . $raca2[2]."<br>";
echo "A raça do terceiro pet é: " . $raca3[2]."<br>";
echo "A raça do quarto pet é: " . $raca4[2]."<br>";

foreach ($tutor as $indice => $tutor) 
    {
        echo "Número: $indice - O nome do Tutor é: $tutor <br>";
    }
foreach ($datanascimento as $indice => $datanas) 
    {
        echo "A data de nascimento do tutor",$datanas,"<br>";
    } 
foreach ($primeiropet as $indice => $primeirodog) 
    {
        echo "O nome do primeiro pet é:",$primeirodog,"<br>";
    } 
foreach ($segundopet as $indice => $segundodog) 
    {
        echo "O nome do segundo pet é:",$segundodog,"<br>";
    }
foreach ($terceiropet as $indice => $terceirodog) 
    {
        echo "O nome do terceiro pet é:",$terceirodog,"<br>";
    }
foreach ($quartopet as $indice =>$quartopet) 
    {
        echo "O nome do quarto pet é: ",$quartopet,"<br>";
    }
foreach ($cor1 as $indice => $cor1) 
    {
        echo "A cor do primeiro pet é: ",$cor1,"<br>";
    }
foreach ($cor2 as $indice => $cor2) 
    {
        echo "A cor do segundo pet é: ",$cor2,"<br>";
    }
foreach ($cor3 as $indice => $cor3) 
    {
        echo "A cor do terceiro pet é: ",$cor3,"<br>";
    }
foreach ($cor4 as $indice => $cor4) 
    {
        echo "A cor do quarto pet é: ",$cor4,"<br>";
    }
foreach ($raca as $indice => $raca) 
    {
        echo "A raça do primeiro pet é: ",$raca,"<br>";
    }
foreach ($raca2 as $indice => $raca2) 
    {
        echo "A raça do segundo pet é: ",$raca2,"<br>";
    }
foreach ($raca3 as $indice => $raca3) 
    {
        echo "A raça do terceiro pet é: ",$raca3,"<br>";
    }
foreach ($raca4 as $indice => $raca4) 
    {
        echo "A raça do quarto pet é: ",$raca4,"<br>";
    } 
}
cadastro(
    ["Wellington Ribeiro do Nascimento","Fulano Ribeiro do Nascimento","Beltrano Ribeiro do Nascimento"], 
    ["06/10/1977","15/10/1999","14/08/2005"], 
    ["Safira","totó","chuvisco"], 
    ["Hoshi","gigante", "kiko"], 
    ["Nikita","Aika","Lobão"], 
    ["T'Challa","Valkyria","Luna"], 
    ["Preto","caramelo", "Malhado"], 
    ["Branco","Preto", "cinza"], 
    ["Caramelo","Caramelo","Branco"], 
    ["Caramelo","Caramelo","Branco"], 
    ["PitBull","Pastor Alemão", "Dalmata"], 
    ["SRD = Sem Raça Definida","Pastor Belga de Malinoar", "Husk Siberiano"], 
    ["PitBull","Pastor Alemão", "Dalmata"], 
    ["PitBull","Pastor Alemão", "Dalmata"]
        );


    /* echo "O nome da minha primeira cadelinha é: ",$primeirodog,"<br>";
     echo "O nome da minha segunda cadelinha é: ",$segundodog,"<br>";      
     echo "Olá, meu nome é ",$nome, " nasci em: ", $datanascimento, " possuo 4 cães <br>",
          " O nome da primeira é: ", $primeirodog, "<br>", "O nome da segunda é: ", $segundodog,
          "<br>";*/

echo "Operadores<br>";
function somar($n1,$n2)
{
echo "Soma<br>";

/*$n1=8;
$n2=40;*/
$resultadosoma=$n1+$n2;
echo "O resultado da soma de dois números é: ",$resultadosoma,"<br>";
}
somar(8,40);

function subtrair($n1,$n2)
{
//$n1=8;
//$n2=40;
$resultadosubtracao=$n1-$n2;
echo "O resultado da subtração de dois números é: ",$resultadosubtracao,"<br>";
}
subtrair(8,40);

function multiplicar

$n1=8;
$n2=40;
$resultadomultiplicacao=$n1*$n2;
echo "O resultado da subtração de dois números é: ",$resultadomultiplicacao,"<br>";

$n1=8;
$n2=40;
$resultadodivisao=$n1/$n2;
echo "O resultado da subtração de dois números é: ",$resultadodivisao,"<br>";
?>