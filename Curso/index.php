<?php
// interfaces
/**
 * Bom, para entendermos interfaces, vamos pegar uma definição da própria página do PHP:
 * Interfaces de objetos permitem a criação de códigos que especificam quais métodos uma classe 
 * deve implementar, sem definir como esses métodos serão tratados.
 * Mas então, o que isso significa?
 * Significa que interfaces são nada mais, 
 * nada menos do que modelos de métodos que podemos implementar em uma classe 
 * (ou até mesmo estende-lá em outra interface como veremos mais a seguir), 
 * e que ao fazer essa implementação a classe passa a ser obrigada à conter 
 * os métodos declarados na interface, resultando em um erro caso não seja feito;
 * Em outras palavras, podemos entender interfaces como um contrato, 
 * a partir do momento que você assina esse contrato (implementa ele),
 * você passa a ser obrigado a seguir as especificações previstas nele, 
 * o descumprimento delas seria punitivo (que no nosso caso seria um erro fatal do código).
 */

interface provedorPagamento {
  // declaracao de metodos
 }

interface paypal implements provedorPagamento{
  // add metodos e atributos da classe
}

// implementação certa de uma interface
interface HelloWorld {
  public function helloWorld():void
}

class Saudar implements helloWorld {
  public function helloWorld() {
    echo 'ola mundo !';
  }
}

$cumprimentos = new Saudar();
$cumprimentos->helloWorld();

?>
