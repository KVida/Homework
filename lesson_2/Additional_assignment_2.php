<?php
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    echo"Перевод числа с 10й системы в 2ную систему исчисления <br>";

    $number_10 = 2;
    $num = $number_10;
    $number_2 ="";

    while ($number_10 >= 2 && $number_10 <= 100) :
        $ost = $number_10 % 2;
        $number_2 .= (string)$ost;
        $number_10 = (integer)$number_10/2;
    endwhile; 

    if ($number_10 == 0 || $number_10 == 1) {
        $number_2 .= (string)$number_10;
    }

    echo " Число <b><i>$num</i></b> в 2ной системе исчисления <b><i>" . strrev($number_2) . "</i></b>";