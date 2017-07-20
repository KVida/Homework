<?php
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    $a = array (5, 1, 2);
    echo "Дано три числа $a[0], $a[1], $a[2]. " . "<br>";

    if ($a[0] >= $a[1]) {
        $a_sr = $a[0];
        if ($a[0] >= $a[2]) {
            $a_sr = $a[2];
        } else {
            $a_sr = $a[0];
        }
    } else {
        $a_sr = $a[1];
        if ($a[1] >= $a[2]) {
            $a_sr = $a[2];
        } else {
            $a_sr = $a[1];
        }
    }

    echo "Число находящееся по середине между числами " . $a_sr;
