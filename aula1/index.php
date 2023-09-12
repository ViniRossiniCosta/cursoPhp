<?php
// booleans / bool

var_dump(true);
var_dump(false);

// inteiros

var_dump(123);   // Numero decimal
var_dump(-123);  // Numeros negativos
var_dump(0123);  // numero octal
var_dump(0x1A);  // numero hexagonal
var_dump(0b111); // numero binario

// numeros flutuantes

$a = 1.234;
$b = 1.2e3;
$c = 7E-10;

echo $a . "\n";
echo $b . "\n";
echo $c . "\n";

// strings

echo "opa opa opa \n";
echo "aaaaaaaaaaaaaaaaa";

// arrays (vetores)

$array1 = array(
    "dev" => "vini",
    "gp" => "php"
);

// ou

$array2 = [
    "dev" => "vini",
    "gp" => "php"
];

var_dump($array1);
var_dump($array2);

?>