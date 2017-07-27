<?php

    function drawTable($col,$row,$color){
        echo "<table class='styleTable' style='color:" . $color . "' cellspacing='0'";
        for ($i = 1; $i <= $col; $i++) {
            echo "<tr style='border:1px solid grey'>";
            for ($j = 1; $j <= $row; $j++) {
                echo "<td style='border:1px solid grey'> &nbsp;$i * $j=&nbsp; " . $i*$j . "</td>";
            }
        echo "</tr>";
        }
    echo "</table>";
    }


    $col = 5;
    $row = 5;
    $colorTab1 = "#AF5";
    echo "Таблица умножения " . $col . "X" .$row . "<br>";
    drawTable($col, $row, $colorTab1);

    $col = 6;
    $row = 6;
    $colorTab2 = "#F00";
    echo "Таблица умножения " . $col . "X" .$row . "<br>";
    drawTable($col, $row, $colorTab2);

    $col = 7;
    $row = 8;
    $colorTab3 = "#56859a";
    echo "Таблица умножения " . $col . "X" .$row . "<br>";
    drawTable($col, $row, $colorTab3);