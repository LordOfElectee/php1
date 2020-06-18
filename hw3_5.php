<?php
function changaBlank($text) {
    $space = [' ' => '_'];
    return strtr($text, $space);
}

echo changaBlank("раз два три");