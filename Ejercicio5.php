<?php

(int)$a = 5;
(int)$b = 1;
(int)$c = 5;

$vec = array($a,$b,$c);

sort($vec);

if($a !== $b && $a !== $c && $b !== $c)
{
    echo "<br><b>El valor Intermedio es:</b> " . $vec[1];
}else{
    echo "<br><b>No hay valor del Medio. </b>";
}

?>