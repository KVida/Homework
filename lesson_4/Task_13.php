<?php 
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);
    
    echo "Нарисовать ромб из чисел. <br><br>";
    $height = 5;
    for ($y = 1; $y <= $height; $y++) {
        echo "<pre>";
        echo str_repeat('&nbsp;',($height-$y)*2);
        echo str_repeat('&nbsp;1 &nbsp;', $y) . "<br>";
        echo "</pre>";
    }

    $number = 1;
    for ($y = $height-1; $y >= $number; $y--) {
        echo "<pre>";
        echo str_repeat('&nbsp;',($height-$y)*2);
        echo str_repeat('&nbsp;1 &nbsp;', $y) . "<br>";
        echo "</pre>";
    }