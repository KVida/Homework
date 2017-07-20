<?php 
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);
    
    echo "Создать массив из 50-ти случайных чисел. Генерируя случайноe число, проверять есть ли такой ключ в данном массивe. <br><br>";

    $arr = array();
    $k = 0;
    for ($i = 0; $i < 50; $i++) {
       $number_rand = rand(0, 150);
       $arr[$i] = $number_rand;
    }

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    for ($i = 0; $i < 50; $i++) {
        if (array_key_exists($arr[$i], $arr)) {
            $k++;
        }
    }

    if ($k === 0) {
        echo "Не найдено.";
    } else {
        echo "Найдено.";
    }