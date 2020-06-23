<?php

function sum($arg1, $arg2) {
    return $arg1 + $arg2;
}

function minus($arg1, $arg2) {
    return $arg1 - $arg2;
}

function multiply($arg1, $arg2) {
    return $arg1 * $arg2;    
}

function devide($arg1, $arg2) {
    if ($arg2 == 0){
        return "На ноль делить нельзя";
    }
    return $arg1 / $arg2;
}

function mathOperation($arg1, $arg2, $operation) {

    switch ($operation) {
        case 'summ':
            $result = $arg1 . " %2b " . $arg2 . ' = ' . sum($arg1, $arg2);
            return $result;
        
        case 'minus':
            return $result = $arg1 . ' - ' . $arg2 . ' = ' . minus($arg1, $arg2);

        case 'multiply':
            return $result = $arg1 . ' * ' . $arg2 . ' = ' . multiply($arg1, $arg2);
        
        case 'devide':
            return $result = $arg1 . ' / ' . $arg2 . ' = ' . devide($arg1, $arg2);
    }
}

$result = mathOperation($_GET['num1'], $_GET['num2'], $_GET['sign']);
header("Location: /hw6_1.php?result=$result");