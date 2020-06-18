<?php
$task3 = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Касимов', 'Скопин'],
    'dsa' => 'dasdsa'
];

foreach ($task3 as $key => $value){
    echo $key . ': <br>';
    if (is_array($value)){
        echo (implode(', ', $value)) . '.<br>';
    } else {
        echo $value;
    }
}
