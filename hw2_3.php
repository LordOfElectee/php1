<?php
$a = 3;
$b = 2;

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

echo sum($a, $b) . "<br>";
echo minus($a, $b) . "<br>";
echo multiply($a, $b) . "<br>";
echo devide($a, $b) . "<br>";