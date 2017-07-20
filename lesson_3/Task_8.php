<?php
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    echo "Создать таблицу умножения 10 на 10 при помощи цикла for и разукрасить каждое число разным цветом. <br> <br>";

    $arr_color = array ('#FF0000', '#FFFF00', '#008000','#0000FF', '#800080', '#C0C0C0', '#00FFFF', '#00FF00', '#FF00FF', '#000080');

    echo "<table border = '1'>";
    for ($i = 1; $i < 10; $i++) { 
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++) { 
            $color_number = rand(0, 9);
            echo "<td style =\"color : $arr_color[$color_number];\"> $i*$j=" . $i*$j . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
