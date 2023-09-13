<?php

// estruturas de controle
// condicao if/else
/**
 * A estrutura condicional if recebe um valor e resolve, colocando a resposta como um valor BOOLEANO.
 * Ou seja: você poderá retornar apenas um valor VERDADEIRO, representado por if (condição) ou FALSO, 
 * representado por else (como os exemplos de SE dados acima).
 */

// ex1
$idade = 17;
if ($idade >= 18) {
    echo "voce é maior de idade";
} else {
    echo "voce é menor de idade";
}

// ex2
$gp = "zimsimz";

if ($gp == "Slaksak") {
    echo "sim, apenas sim";
} else {
    echo "isso nao existe, ta maluco!";
}

// ex3
$logado = true;
if ($logado) {
    echo "continue fazendo o que estava fazendo";
} else {
    echo "va para o login";
}

// ex4
$usuario = "danielhe4rt";
$senha = "secret123";

if ($usuario == "danielhe4rt" && $senha == "secret123") {
    echo "Olá danielhe4rt, seja bem vindo";
} else {
    echo "Credenciais incorretas";
}

// ex5
$userDaniel = "danielhe4rt";
$passDaniel = "secret123";

$userCaio = "caioarruda";
$passCaio = "caiozin123";

if ($userDaniel == "danielhe4rt" && $passDaniel == "secret123") {
    echo "Olá danielhe4rt, seja bem vindo";
} else if ($userCaio == "caiozin" && $passCaio == "321321") {
    echo "Olá caiozin, seja bem vindo";
} else {
    echo "Credenciais incorretas";
}

// switch-case

$comando = "!jsajd";

switch ($comando) {
    case '!sla':
        echo "sla?";
        break;
    default:
        echo "sla?";
        break;
}

// match
/**
 * O Match é uma novidade do PHP 8, com ela ganhamos uma nova opção para fazer comparações multiplas, 
 * além dos classico if e else e do switch, visto anteriomente.
 * O match apróxima-se bastante do switch, em sua lógica. 
 * Onde ele pecorre as opções e retorna a primeira que é compativel com suas condicionais. 
 * As diferenças entre eles é sua sintaxe mais elegante e suas operações sempre, 
 * são acompanhadas pela comparação com os tipos (===).
 * Outra vantagem do match, é a relização de operações, 
 * entre cenário positivos (Exemplo 02), 
 * onde podemos fazer novas comparações, para encontrar um resultado esperado.
 */
// ex 1

echo match ("heart devs") {
    "!site" => "Link: https://heartdevs.com",
    "!he4rt", "!discord" => "Entre no nosso discord: https://discord.com/he4rt",
    default => "nada acontece feijoada"
};

// ex 2

$idade = 21;
$result = match (true) {
    $idade >= 65 => 'Idoso',
    $idade >= 25 => 'Adulto',
    $idade >= 18 => 'Jovem adulto',
    default => 'Criança',
};

echo $result;

// condicao-ternario
/**
 * O operador ternário ajuda na escrita de condições if/else diminuindo para uma única linha. 
 * Ou seja, será algo para ser usado quando você tem uma fácil comparação e um retorno SIMPLES.
 * O operador ternário leva alguns símbolos para substituir o uso de parênteses e chaves, sendo eles o ? e :
 * O Sinal de ? sinaliza para o interpretador que tudo que for escrito anteriormente, será a condição a ser executada.
 * Após o sinal de ? e entre o sinal de : é o que irá retornar se a condição for verdadeira e após o sinal de : 
 * é o que irá retornar caso a condição for falsa.
 */
// ex 1
$nick = 'nome';
$who = $nick == 'jorg123' ? 'é o jorge online' : 'não é o jorgee';
echo $who;

// ex 2
$modoTest = true;
return $modoTest ? 'modo dev on' : 'aaaaaaaa';

// condicao coalescencia nula
/**
 * O operador de coalescência nula (??) fornece uma forma conveniente de retornar o valor antes do sinal de ?? 
 * caso o valor exista e não seja NULL ou retorna o valor após o sinal de ??.
 * É especialmente útil quando queremos retornar um valor padrão caso uma chave não exista em um array associativo, 
 * pois é um ótimo substituto para o operador ternário ou uma estrutura de if/else nesses casos.
 */
// ex
$descricaoPorCodigo = array(
    1 => 'Este usuário já existe.',
    2 => 'Senha incorreta.',
    3 => 'Este usuário está bloqueado.',
);

return isset($descricaoPorCodigo[5]) ? $descricaoPorCodigo[5] : 'Alguma coisa deu errado.';

return $descricaoPorCodigo[5] ?? 'Alguma coisa deu errado.';

?>