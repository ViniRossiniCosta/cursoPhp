<?php
// getters
/**
 * Os métodos getters servem para pegar a referência de um valor (geralmente de uma propriedade).
 * temos os modificadores de acesso, e nem sempre queremos deixar as nossas propriedades e métodos públicos, 
 * mas se deixarmos privados como vamos acessar seu valor? podemos usar um getter
 */
class exemplo
{
  private $propriedadePrivada = "Esta propriedade não pode ser alterada nem lida diretamente";
  public $propriedadePublica = "Esta propriedade pode ser alterada e lida diretamente";
  
  
  //Esse método retorna o valor da $propriedadePrivada
  public function getterParaAPropriedadePrivada()
  {
    // criada uma fnc que retorna a referencia desejada
    return $this->propriedadePrivada;
  }
}

// ou

class Exemplo2
{
   private static $propriedadePrivada = "Esta propriedade não pode ser alterada nem lida diretamente";
   public static $propriedadePublica = "Esta propriedade pode ser alterada e lida diretamente";
   
   
   //Esse método retorna o valor da $propriedadePrivada
   public static function getterParaAPropriedadePrivada()
   {
    // usa Self para acessar os metodos da classe desejada
     return self::$propriedadePrivada;
   }
}

?>