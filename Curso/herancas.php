<?php
// heranca
/**
 * Com ela é possível fazer o reuso de classes que contém atributos e metódos em comum.
 */
class Pai {
    public $nome = 'goku';
    public $idade = '33';

    public function apresentar() {
        echo 'Oi eu sou {$this->nome} e tenho {$this->idade} anos!' . PHP_EOL;
    }
}

class Filho extends Pai {
    public $nome = 'gohan';
}

$pai = new Pai();
$pai->apresentar();
$filho = new Filho();
$filho->apresentar();

?>