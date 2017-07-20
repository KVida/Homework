<?php 
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);
    
    echo "Создать массив из 100 случайных как чисел так и ключей. После этого выполнить:<br>
        Сортировку массива по значению.<br>
        Сортировку массива по ключу.<br><br>";

    $arr = array();
    $k = 0;
    while ($k < 100) {
        $key = rand(0, 200);
        $arr[$key] = rand(0, 200);
        $k = count($arr);
    }

    echo "Массив <br><pre>";
    print_r($arr);
    echo "</pre>";

   echo "Сортировку массива по ключу: <br>";

    ksort($arr);
    foreach ($arr as $key => $val) {
        echo "$key  =>  $val <br>";
    }

    echo "<br> Сортировку массива по значению: <br>";

    asort($arr);
    foreach ($arr as $key => $val) {
        echo "$key  =>  $val <br>";
    }