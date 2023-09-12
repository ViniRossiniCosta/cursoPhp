<?php
// operadores bitwise
// E(&), OU(|), OU exlcusivo(^), Nao(~), Deslocar esquerda(<<), Deslocar direito(>>)
/**
 * Os operadores bitwise: & , | , ^ comparam dois valores inteiros utilizando suas representações binárias, 
 * e retornam um novo valor. Cada bit será comparado e a formação desse novo valor depende do operador que você usar.
 */
   
 echo 9 & 7;
 echo 9 | 7;
 echo 9 ^ 7;

 $a = -9;
 $a = ~$a;

 echo $a;

 $a = 9;
 $b = 7;
 
 echo $a << $b;

 $a = 9;
 $b = 7;
 
 echo $a >> $b;
 

?>