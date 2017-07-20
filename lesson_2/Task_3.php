<?php
//Определите, какой сегодня день недели.
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

/*
* Понедельник  $date = 1
* Вторник  $date = 2
* Среда  $date = 3
* Четвер  $date = 4
* Пятница  $date = 5
* Суббота  $date = 6
* Воскресенье  $date = 7
*/  
  
    $date = 4;
    switch ($date) {
        case ($date >= 1 && $date <= 5):
            echo "Сегодня $date -й день недели - это рабочий день.";
            break;
        case ($date >= 6 && $date <= 7):
            echo "Сегодня $date -й день недели - это выходной день.";
            break;
        default :
            echo "Извените, такого дня недели не существует!";
            break;
    }

?>
