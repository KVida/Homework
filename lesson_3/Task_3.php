<?php
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    echo "Найти сумму чисел от 0 до 100. <br><br>";
    $summ = 0;
    for ($i = 0; $i <= 100; $i++) {
       $summ += $i;  
    } 
    echo "S = " . $summ;  