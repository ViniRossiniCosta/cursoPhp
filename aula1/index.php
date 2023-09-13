<?php
// classes
/**
 * As classes são responsáveis por criarem estruturas 
 * e comportamentos para conceitos das aplicações e do mundo real, 
 * elas são compostas basicamente por propriedades e métodos. 
 * As propriedades funcionam como característias de um objeto (representa uma analogia aos objetos do mundo real/virtual) 
 * e os métodos representam suas funcionalidades. 
 * Podemos ter um exemplo de um jogador de qualquer jogo virtual, 
 * onde ele se registra, tem uma quantidade X de dinheiro, 
 * e caso queira pode trocar de senha
 */
class Player {
    public string $username;
    private $password;
    protected float $money;

    // Metodo construtor
    public function __construct(string $username, string $password, float $money) {
        $this->username = $username;
        $this->password = $password;
        $this->money = $money;
    }
    
    /**
     * setter que tem a função de atualizar a senha
     */
    public function updatePassword(string $oldPassword, string $newPassword): void {
        if(!password_verify($oldPassword, $this->password)) {
            throw new Exception('Senha incorreta');
        }
        $this->password = password_hash($newPassword, PASSWORD_ARGON2I);
    }

    /**
     * metodo que checa a quantidade de dinheiro que o usuario tem, com o retorno booleano
     */
    public function canBuy(Item $item): bool 
    {
        return $this->getMoney() >= $item->getPrice();
    }

    /**
     * getter com funcao de pegar o dinheiro na conta
     */
    public function getMoney():float {
        return $this->money;
    }
}

// Item.php
class Item {

    private string $name; 
    private float $price; 

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): string 
    {
        return $this->price;
    }
}

$antiSerasa = new Item('antiSerasa', 5640);

$vini = new Player('vini','secret123', 1000);

echo "nome usuario: " . $vini->username;
echo "saldo: " . $vini->getMoney();
if($vini->canBuy($antiSerasa)){
    echo $vini->username . 'voce pode comprar o ' . $antiSerasa->name . '!';
}else{
    echo $vini->username . 'voce não pode comprar o ' . $antiSerasa->name . '!';
}
?>