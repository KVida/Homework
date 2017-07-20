<?php
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    $i = 0;
    echo "Вывести четные числа от 0 до 101 <br><br>";
    while ($i <= 101) {
        echo $i . "<br>";
        $i+= 2;
    }   