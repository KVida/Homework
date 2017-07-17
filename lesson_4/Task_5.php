<?php 
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    echo "Дана строка. Если ее длина больше 10 символов, то оставить в строке только первые 6 символов, иначе дополнить строку символами 'o' до длины 12.<br><br>";

    $str = "012345";
    echo "Дана строка:   $str <br>";

    $str_length = strlen($str);
    if ($str_length >= 10) {
        $rez = substr($str, 0, 6);
    } else {
        for (($i = $str_length+1); $i <= 12; $i++) {
            $rez = str_pad($str, $i, 'o');
        }
    }
    echo "Полученная строка:   $rez";