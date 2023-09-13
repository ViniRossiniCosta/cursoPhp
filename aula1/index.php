<?php

// namespace
/**
 * Namespaces no PHP servem para encapsular códigos e eliminar a possibilidade de colisão de nomes. 
 * É uma forma de agrupar classes, interfaces, funções, métodos, constantes, entre outros que estão relacionadas.
 */
// ex 1
namespace Controllers;
class Controllers {
    // encapsulando o controle
}
// sub-namespaces
/**
 * Também é possível escrever sub-namespaces. 
 * Tudo o que está definido no exemplo abaixo fará parte do namespace Controllers\Admin
 */
namespace Controllers\admin;
class adminController {
    // encapsulando o adm controller
}

// Use
/**
 * Uma vez que você declarou namespaces em seu sistema é possível importar classes,
 * traits, etc. Para isso basta usar a instrução use.
 * A instrução use substitui a necessidade das variações de require e 
 * include para importação de arquivos de código. 
 * Cada namespace deve ter sua própria instrução use.
 */
// ex
namespace Controllers;
use synFony\Component\Console\Input\{InputInterface, InputOption};

// alias / as
/**
 * O uso de um namespace também permite alias. 
 * Isso é feito usando a palavra-chave as para reduzir o namespace ou para evitar colisões devido a nomes iguais.
 */
// ex 
namespace Controllers;
use Zend\Twitter as twit;

?>