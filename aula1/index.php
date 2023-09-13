<?php

// Operadores logicos
// && e and
$a = true;
$b = true;

var_dump($a && $b);

// or e ||
$a = false;
$b = true;

var_dump($a || $b);

// ^ e xor
$a = true;
$b = true;

var_dump($a ^ $b);

$a = true;
$b = false;

var_dump($a ^ $b);

// ! e not
$a = true;

var_dump(!$a);

?>