<?php 
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);
    
    echo "Создать массив из 100 случайных ключей. Создать еще один массив, который будет содержать все ключи первого массива. <br><br>";

    $arr = array();
    $b_arr = array();
    
    $k = 0;
    while ($k < 10) {
        $key = rand(0, 20);
        $arr[$key] = rand(0, 20);
        $k = count($arr);
    }

    echo "Массив случайных ключей <br>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    echo "Отсортированный массив случайных ключей <br>";
    ksort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    
    foreach ($arr as $key => $val) {
        $b_arr[$key] = rand(0, 20);
    }

    echo "Второй массив,который содержит все ключи первого массива <br>";
    echo "<pre>";
    print_r($b_arr);
    echo "</pre>";