<?php

// loops - for, foreach, while
// ex 1 - for
$contador = 10;
echo "Script pra contar até" . $contador . PHP_EOL;
for($i = 1; $i <= $contador; $i++){
    echo $i . "... ";
}
echo PHP_EOL . "Script finalizado!";

// ex 2 - while
$continuaLoop = true;
$i = 1;
echo "Script pra contar até 10"  . PHP_EOL;
while ($continuaLoop){
    echo $i . "... ";
    if ($i == 10){
        $continuaLoop = false;
    }
    $i++;
}
echo PHP_EOL . "Script finalizado!";

// ex 3 - foreach
$names = ["waasleey", "leozin044", "rychillie", "jpbrabo"];
foreach($names as $name){
    echo $name . " ";
}

foreach($names as $key => $name){
    echo $key . "." . $name . " ";
}

// ex 3 - foreach 2
$pessoa = [
    "danielhe4rt",
    21,
    "Fullstack Developer"
];
foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}

?>