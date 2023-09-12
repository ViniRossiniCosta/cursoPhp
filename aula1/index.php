<?php
// comparacao de valores

// igualdade
echo (0 == false) . PHP_EOL;
echo ('123' == 123) . PHP_EOL;
echo ('1' == 1) . PHP_EOL;
echo (123.0 == 123) . PHP_EOL;

// diferença
echo (0 != false) . PHP_EOL;
echo ('123' != 123) . PHP_EOL;
echo ('1' != 1) . PHP_EOL;
echo (123.0 != 123) . PHP_EOL;

// identico
echo (0 === false) . PHP_EOL;
echo ('123' === 123) . PHP_EOL;
echo ('1' === 1) . PHP_EOL;
echo (123.0 === 123) . PHP_EOL;

// não identico
echo (0 !== false) . PHP_EOL;
echo ('123' !== 123) . PHP_EOL;
echo ('1' !== 1) . PHP_EOL;
echo (123.0 !== 123) . PHP_EOL;

// maior/menor que
echo (2 < 3) . PHP_EOL;
echo (2 > 3) . PHP_EOL;
echo (2 <= 2) . PHP_EOL;
echo (2 >= 3) . PHP_EOL;

?>