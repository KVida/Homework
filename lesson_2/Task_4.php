<?php
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    $number = 10;

    echo "Задание_1" . "<br>";
    echo "Остаток от деления числа $number на 3 = " . $number%3 . "<br>";
    echo "Остаток от деления числа $number на 5 = " . $number%5 . "<br>" . "<hr/>";

    echo "Задание_2" . "<br>";
    echo "Число $number увеличили на 30%, получим " . $number*1.3 . "<br>";
    echo "Число $number увеличили на 120%, получим " . $number*2.2 . "<br>" . "<hr/>";

    echo "Задание_3" . "<br>";
    $number1 = 10;
    $number2 = 10;
    echo "Сумма 40% от числа $number1  и 84% от числа $number2 равна " . ($number1*0.4+$number2*0.84);
