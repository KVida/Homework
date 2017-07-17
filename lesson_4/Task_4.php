<?php 
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    echo "Создать массив из 100 случайных чисел. Найти сумму чисел, которые кратны 5-ти(пяти) <br><br>";

    $arr = array();
    $arr_count = 100;
    for ($i = 0; $i < $arr_count; $i++) {
        $arr[$i] = rand(0, 100);
    } 

    echo "Mассив из 100 случайных чисе: <br>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $summ = 0;
    for ($i = 0; $i < $arr_count; $i++) {
        if ($arr[$i] % 5 == 0) {
            $summ += $arr[$i];
        }
    }

    echo "Сумма равна = $summ";