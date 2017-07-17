<?php 
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);
    
    echo "Создайте массив из 1000 случайных чисел. Определите, есть ли в массиве повторяющиеся элементы <br><br>";

    $arr = array();
    for ($i = 0; $i < 1000; $i++) {
        $arr[$i] = rand(0, 2000);
    }

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    echo "Отсортированный массив<br>";
    sort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $k = 0;
    for ($i = 0; $i < 9; $i++) {
        if ($arr[$i] == $arr[$i+1]) {
            $k++;  
        } 
    }

    if ($k != 0) {
        echo "Да, повторяющиеся элементы есть. Колличество повторяющихся элеметов = $k <br>";
    } else {
        echo "Нет, повторяющихся элементов нету. <br>";
    }