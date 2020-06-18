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
        case 'сложить':
            return sum($arg1, $arg2);
        
        case 'вычесть':
            return minus($arg1, $arg2);

        case 'умножить':
            return multiply($arg1, $arg2);
        
        case 'разделить':
            return devide($arg1, $arg2);
    }
}

$a = 3;
$b = 7;

echo mathOperation($a, $b, 'сложить');