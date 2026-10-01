<?php
// Exemplo 1: Exibindo uma mensagem de boas-vindas
function exibirBoasVindas (): void {
    echo "Bem-vindo ao sistema acadêmico!<br>";
    echo "Tenha uma excelente aula.<br>";
}

//chamando a função
exibirBoasVindas();

// Exemplo 2: Calculando a média de duas notas
function calcularMedia (float $nota1, float $nota2): float {
    $media = ($nota1 + $nota2) / 2;
    return $media;
}

// Uso da função
$notaFinal = calcularMedia (7.5, 8.5);

if ($notaFinal >= 7.0) {
    echo "Média: {$notaFinal} - Aluno Aprovado!";
} else {
    echo "Média: {$notaFinal} - Aluno em recuperação!";
}

// Exemplo 3: Formatando uma mensagem com saudação opcional
function saudarUsuario (string $nome, string $saudacao = "Olá"):
    string 
    {
    return "{$saudacao}, {$nome} ! Seja bem-vindo.";
    }
// Chamada sem o segundo argumento (usa o valor padrão "Olá")
echo saudarUsuario("Carlos") . "<br>";

// Chamada informando um novo valor para a saudação
echo saudarUsuario("Maria", "Bom dia") , "<br>";
echo saudarUsuario("Uedson", "você ainda está dormindo?") , "<br>";

// Exemplo 4: Aplicando nota bônus diretamente na variável original
function aplicandoBonificacao (float &$nota, float $bonus) : void {
    $nota += $bonus;
    if ($nota > 10.0) {
        $nota = 10.0; // Limite máximo
    }
}

$notaAluno = 8.5;

// A variável $notaAluno será alterada diretamente dentro da função 
aplicandoBonificacao ($notaAluno, 2.0);

// Exibe: 10.5 -> ajustado para 10.0
echo "Nota atualizada do aluno: {$notaAluno}";

// Exemplo 5: Filtrando notas acima da média usando a função anônima 
$notas = [4.5, 7.0, 8.5, 5.0, 9.0, 6.0];

// Usando array_filter com uma callback
$aprovados = array_filter($notas, function (float $nota) : bool {
    return $nota >= 7.0;
});

echo "<pre>";
print_r ($aprovados);
echo "</pre>";

?>