<?php
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    echo "С помощью цикла foreach выведите на экран столбец ключей и элементов в формате 'green-зеленый'. <br> <br>";

    $arr = array (
        'green' => 'зеленый',
        'red' => 'красный',
        'blue' => 'голубой'
    );

    foreach ($arr as $key => $value) {
        echo $key . '-' . $value . '<br>';
    }

     //доделать