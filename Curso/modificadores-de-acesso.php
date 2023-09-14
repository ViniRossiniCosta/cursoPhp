<?php
// modificadores de acesso
/**
 * Os modificadores de acesso são palavras-chave reservadas para definir quais metódos e/ou propriedades 
 * podem ser acessadas à partir de um ponto especifíco do seu código.
 */
// public
class Pessoa{
    public $nome = 'junin';
    public function apresentar() {
        echo 'ola eu sou o {$this->nome}';
    }
}

$pessoa = new Pessoa();
echo $pessoa->nome . PHP_EOL;
$pessoa->apresentar() . PHP_EOL;

// protected
class Pai {
    protected $nomePai = 'Airton';
}

class Filho extends Pai {
    public $nome = 'pedro pedras';
    public function apresentar() {
        echo 'meu nome é {$this->nome}e o do meu pai é ' . $this->nomePai;
    }
}

$pai = new Pai();
$pai->nomePai . PHP_EOL;

$filho = new Filho();

$filho->nomePai . PHP_EOL;
$filho->apresentar();

// private 
class tio {
    protected $nomeTio = 'giuberto';
    private $cpf = '777.777.777.77';
    public function apresentar() {
        echo 'meu nome é {$this->nomeTio} e este é meu cpf {$this->cpf}';
    }
    private function mostrarCpf(){
        echo $this->cpf;
    }
}

class Primo extends Tio {
    public $nome = 'theo';
    public function mostrarCpfTio(){
        echo 'o cpf do meu pai é: ' . $this->cpf; // prop inexistente
    }
}

$pai = new Pai();
$pai->cpf . PHP_EOL; //Erro fatal
$pai->mostrarCpf() . PHP_EOL; //Erro fatal
$pai->apresentar() . PHP_EOL; //Ok

$filho = new Filho();
$filho->mostrarCpfPai(); //Erro fatal

?>