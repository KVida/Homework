<?php 
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);
    
    echo "Создать два массива из 10-ти случайных чисел. Выполнить сравнения массивов по двум критеряим: вычислить схождение массива, вычислить расхождение массива. <br><br>";

    $arr = array();
    $b_arr = array();
    for ($i = 0; $i < 10; $i++) {
        $arr[$i] = rand(0, 20);
        $b_arr[$i] = rand(0, 20);
    }

    echo "Перввый массив <br><pre>";
    print_r($arr);
    echo "</pre>";

    echo "Второй массив <br><pre>";
    print_r($b_arr);
    echo "</pre>";
   
    $rez = array();

    echo "Cхождение массивов";
    $rez = array_intersect($arr, $b_arr);
    if ((count($rez)) != 0) {
        echo "<pre>";
        print_r($rez);
        echo "</pre>";
    } else {
        echo "  --> нету! <br><br>";
    }

    echo "Cхождение массивов с проверкой индексов";
    $rez = array_intersect_assoc($arr, $b_arr);
    if ((count($rez)) != 0) {
        echo "<pre>";
        print_r($rez);
        echo "</pre>";
    } else {
        echo " --> нет! <br><br>";
    }

    echo "Расхождение массивов";
    $rez = array_diff($arr, $b_arr);
    if ((count($rez)) != 0) {
        echo "<pre>";
        print_r($rez);
        echo "</pre>";
    } else {
        echo " --> нету! <br><br>";
    }

    echo "Расхождение массивов с проверкой индексов";
    $rez = array_diff_assoc($arr, $b_arr);
    if ((count($rez)) != 0) {
        echo "<pre>";
        print_r($rez);
        echo "</pre>";
    } else {
        echo " --> нет! <br><br>";
    }