<?php

$operador = '*';
$op1 = 5;
$op2 = 5;

switch($operador)
{
    case '+':
        echo "El resultado de la operacion " . $op1 . $operador . $op2 . " es: " . ($op1 + $op2);
        break;
        case '-':
            echo "El resultado de la operacion " . $op1 . $operador . $op2 . " es: " . ($op1 - $op2);
            break;
            case '*':
                echo "El resultado de la operacion " . $op1 . $operador . $op2 . " es: " . ($op1 * $op2);
                break;
                case '/':
                    echo "El resultado de la operacion " . $op1 . $operador . $op2 . " es: " . ($op1 / $op2);
                    break;
}

?>