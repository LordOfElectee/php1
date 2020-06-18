<?php
$cities = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин',],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт',],
    'Рязанская область' => ['Рязань', 'Шацк', 'Касимов',],
];

foreach ($cities as $region => $city) {
    echo $region . ":<br>";
    echo implode(", ", $city) . ".<br>";
}