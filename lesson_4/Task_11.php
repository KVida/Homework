<?php 
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);
    
    echo "Создать массив c 10-ти чисел. Вычислить произведение значений массива. <br><br>";

    $arr = array();
    for ($i = 0; $i < 10; $i++) {
        $arr[$i] = rand(0, 20);
    }

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    echo "<br> Произведение значений массива = " . array_product($arr);