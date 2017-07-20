<?php
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    $number = 10;

    echo "Задание_1" . "<br>";
    echo "Заданно число " . $number . "<br>";
    if ($number > 10) {
        $number += 100;
        echo "После увеличения числа на 100, получим " . $number . " <br>";
    } else {
        $number -= 30;
        echo "После уменьшения числа на 30, получим " . $number . "<br>";
    }

    echo "<hr/>" . "Задание_2" . "<br>";
    echo "Заданное число " . $number . "<br>";
    if ($number % 2 == 0){
        $number = $number/2;
        echo "Это число четное." . "<br>" ;
    } else {
        $number = $number*3;
        echo "После увеличения числа в 3 раза, получим " . $number . "<br>";
    }

    echo "<hr/>" . "Задание_3" . "<br>";
    echo "Заданное число " . $number . "<br>";
    if ($number < 50) {
        $number = pow($number,2);
        echo "Квадрат числа = $number ";
    } elseif ($number > 10 && $number < 30) {
        $number = 0;
        echo "Получим число $number ";
    }else {
        echo "error";
    }

    echo "<hr/>" . "Задание_4" . "<br>";
    $number1 = 120;
    $number2 = 20;
    if ($number1 >= $number2) {
        echo "Наибольшим числом из $number1 и $number2 является " . $number1 . "<br>";
    } else {
        echo "Наибольшим числом из $number1 и $number2 является " . $number2 . "<br>";
    }

    echo "<hr/>" . "Задание_5" . "<br>";
    echo "Даны числа $number1 и $number2. Они отличаются на 100?";
    if (abs($number1 - $number2) == 100) {
        echo " yes" . "<br>";
    } else {
        echo " no" . "<br>";
    }

    echo "<hr/>" . "Задание_6" . "<br>";
     echo "Числа $number1 и $number2, отличаются более чем на 20?";
    if (abs($number1-$number2) <= 20) {
        echo " yes" . "<br>";
    } else {
        echo " no" . "<br>";
    }

    echo "<hr/>" . "Задание_7" . "<br>";
    $mounth = 4;
    echo "Задан ночер месяца - $mounth <br>";
    switch ($mounth) {
        case 12:
        case 1:
        case 2:
            echo "Это зима" . "<br>";
            break;
        case ($mounth >= 3 && $mounth <= 5):
            echo "Это весна" . "<br>";
            break;
        case ($mounth >= 6 && $mounth <= 8):
            echo "Это лето" . "<br>";
            break;
        case ($mounth >= 9 && $mounth <= 11):
            echo "Это осень" . "<br>";
            break;
        default :
            echo "такого месяца не существует" . "<br>";
            break;
    }
    
    echo "<hr/>" . "Задание_8" . "<br>";
    $x = 2;
    $y = 1;
    if ($x !== 0 && $y >= 1) {
        echo ($x*$x-4*sqrt($y-1))/(sin(2*$x)+abs($x));
    } else {
        echo "ERROR. Значения x и y - не входят в область допустимых значений";
    }