<?php
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    echo "Создать массив из 100 случайных чисел используя функцию rand <br> <br>";

    $arr = array ();

    for ($i = 100; $i >= 0; $i--) { 
        $arr[$i] = rand(0, 500);
        print_r($arr[$i]);
        echo '<br>';
    }