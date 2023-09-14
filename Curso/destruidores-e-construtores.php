<?php
// Destrutores
/**
 * Já os destrutores agem no momento oposto aos construtores, 
 * bem antes da classe ser removida da memória, sendo atribuídas null ou usando unset.
 * Suas ações devem ser definidas no metódo __destruct.
 */
class Usuario{
    public string $username;
    
    // construtor
    public function __construct(string $username) {
        $this->username = $username;
        echo 'cadastro efetuado';
    }

    public function __destruct() {
        echo 'conta usario' . $this->username . " encerrada!";
    }
}

?>