<?php
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    echo "С помощью цикла foreach выведите слова из массива в столбик. <br><br>";
    $arr = array('html', 'css', 'php', 'js', 'jq');

    foreach ($arr as $key => $value) {
        echo "<pre>";
        print_r($arr[$key]);
        echo "</pre>";
    }