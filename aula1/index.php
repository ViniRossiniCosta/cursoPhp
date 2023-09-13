<?php

// sessions
/**
 * Trabalhar com o conceito de sessões permite que um conjunto de dados, 
 * possam ser utilizados pelos os usuários durante todo o tempo em que acessa 
 * e navega dentro da aplicação web sendo persistidos. Então dessa forma, é possível, 
 * por exemplo, verificar se o usuário está logado ou não no site, 
 * pegar um conteúdo que está dentro de uma carrinho de compras, 
 * ou até controlar permissões de execução do usuário, e muito mais.
 * Session é uma variável superglobal, é uma array associativo que basicamente, 
 * são estruturas onde cada elemento que esta dentro do array, é identificado por uma chave única.
 */
session_start();
echo "inicio";
$_SESSION["aula"] = "PHP";
$_SESSION["hora"] = time();
echo '<br /><a href="pagina2.php">Clique para ir à página 02</a>';

session_start();
date_default_timezone_set('America/Sao_paulo');
echo 'aaa';
echo '+++' . $_SESSION['aula'] . '<br>';
echo 'e agora sao ' . date('H:i:s', $_SESSION['hora']) . ' horas'; 

?>