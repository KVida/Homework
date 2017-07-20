<?php 
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);
    
    echo "Сгенерировать массив из 10-ти случайных чисел. После этого, сгенерировать одно случайно число и проверить, входи ли оно в данный массив.<br><br>";

    $arr = array();
    for ($i = 0; $i < 10; $i++) {
        $arr[$i] = rand(0, 20);
    }

    echo "Массив <br><pre>";
    print_r($arr);
    echo "</pre>";

    $number = rand(0, 20);
    
    if (in_array($number, $arr)) {
        echo "Число $number входит в данный массив.";
    } else {
        echo "Число $number НЕ входит в данный массив.";
    }