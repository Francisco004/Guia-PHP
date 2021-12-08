<?php

function potencia ($v1, $v2)
{
   $resultado = pow($v1, $v2);

   return $resultado; 
}
 
for ($n1 = 1; $n1 <= 4; $n1++) 
{
    echo "Potencia de " . $n1 . "<br>";

   for ($n2 = 1; $n2 <= 4; $n2++)
   {
     if($n2 < 4)
     {
        echo potencia($n1,$n2) . ", ";
     }
     else
     {
        echo potencia($n1,$n2);
     }
   }   
   
   echo "<br> <br>";
}

?>