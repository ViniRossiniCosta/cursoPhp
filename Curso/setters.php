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

// implementacao com 2 interfaces

  // criamos a interface Nome e definimos os métodos para ela:
  interface Nome 
  {
      public function setNome($nome);
      public function getNome();
  }

// criamos a interface Idade e definimos seu métodos:
  interface Idade 
  {
      public function setIdade($idade);
      public function getIdade();
  }

// criamos a classe Pessoa e definimos que ela deverá conter os métodos definidos nas interfaces Nome e Idade:
  class Pessoa implements Nome, Idade 
  {
      private $nome;
      private $idade;
      
      public function getNome()
      {
          return $this->nome;
      }

      public function setNome($nome)
      {
          $this->nome = $nome;
      }

      public function getIdade()
      {
          return $this->idade;
      }

      public function setIdade($idade)
      {
          $this->idade = $idade;
      }

      public static function apresentarPessoa($pessoa)
      {
          echo "Olá, eu me chamo {$pessoa->getNome()} e tenho {$pessoa->getIdade()} anos.";
      }
  }

// instanciamos um novo objeto através da classe Pessoa:
  $novaPessoa = new Pessoa();
// atribuimos valores aos seus atributos com os setters:
  $novaPessoa->setNome('João');
  $novaPessoa->setIdade(36);
// acessamos e executamos o método estático para apresentação de pessoas:
  Pessoa::apresentarPessoa($novaPessoa);

// interface estendiveis

  // definimos a interface CalculosBasicos e seus métodos:
  interface CalculosBasicos
  {
      public function somar($n1, $n2);
      public function subtrair($n1, $n2);
  }

// definimos a interface Matematica, seu métodos e que ela será um interface estendida de CalculosBasicos,
// a partir de agora a classe que implementar Matematica deverá possuir tanto métodos definidos na própria
// interface, quanto métodos definidos em Calculos Basicos;
  interface Matematica extends CalculosBasicos
  {
      public function calcularHipotenusa($cateto1, $cateto2);
  }

// definimos uma classe Matematico que implementa a interface estendível Matematica:
  class Matematico implements Matematica
  {
      public function somar($n1, $n2)
      {
          return $n1 + $n2;
      }

      public function subtrair($n1, $n2)
      {
          return $n1 - $n2;
      }

      public function calcularHipotenusa($cateto1, $cateto2)
      {
        // calculamos a hipotenusa e devolvemos seu valor
          $hipotenusa = ($cateto1**2 + $cateto2**2)**0.5;
          return $hipotenusa;
      }
  }

// instanciamos um objeto e acessamos seu atributos
  $professor = new Matematico();
  echo $professor->somar(2,4)."-"; // 6
  echo $professor->subtrair(12, 10)."-"; // 2
// usamos o método number_format para mostrar apenas 2 casas decimais do resultado
  echo number_format($professor->calcularHipotenusa(12, 15), 2); // 19.21

// usando as interfaces
interface Exemplo 
{
  const testando = 'Valor em Exemplo';
}

echo Exemplo::testando.' - ';

class ClasseTeste implements Exemplo
{
  // ...
}

echo ClasseTeste::testando;

?>
