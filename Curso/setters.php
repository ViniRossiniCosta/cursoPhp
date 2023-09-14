<?php
// setters
/**
 * Setters são métodos usados para alterar valor de propriedades 
 * que não podem ser alteradas diretamente.
 */
// nao estatico 
class Exemplo {
  private $propPrivate = 'esta propriedade não pode ser alterada diretamente';
  public function setterPropPrivate($novoValor){
    $this->propPrivate = $novoValor;
  }
}

// estatico
class Exemplo1 {
    private static $propPrivate = "Esta propriedade não pode ser alterada ou lida diretamente";
    public static function setterPropPrivate(string $novoValor) {
        self::$propPrivate = $novoValor;
    }
}

?>