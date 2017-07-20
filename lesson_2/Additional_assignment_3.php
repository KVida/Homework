<?php
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    echo"Записать строку в массив <br>";

    $str = "1234567890";
    $srt_length = mb_strlen($str);
    $array_str = array();
    $str = "";
    echo "<br>";
    for ($i = 0; $i < 3; $i++) {
        $array_str[$i] = str_split($str, $i+1);
        $str = substr($str, $i+1, $srt_length-1); //chto ostalocm

    //echo $str;
    }
    echo $array_str . "<br>";