<?php

// concatenação de texto

// concatenando com '.'
$euQuero = 'eu queria saber' . 'a senha do wi-fi';

echo $euQuero;

// concatenando com '.='
$euQuero = 'eu queria saber'; 
$euQuero .= 'a senha do wi-fi';

echo $euQuero;

// concatenando as variaveis
$euQuero = 'Alguem sabe a senha';
$wifi = ' do wifi';

echo $euQuero . $wifi;

?>