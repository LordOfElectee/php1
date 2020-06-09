<?php
// echo "<meta http-equiv=\"Content-Type\" content=\"text/html\; charset=utf-8\">";
header('Content-Type: text/html; charset=utf-8');
function translate($text) {
    $letters = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'yo',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'j',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'h',
        'ц' => 'ts',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'sh',
        'ъ' => '',
        'ы' => 'i',
        'ь' => '\'',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya',
    ];
    $text = strtolower($text);
    return strtr($text, $letters);
}

echo translate("ёжик");