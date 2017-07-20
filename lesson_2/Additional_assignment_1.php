<?php
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    echo"Если одно слово записать наоборот <br>";

    $strings = "home";
    echo "Слово <b><i> $strings </i></b> наоборот <b><i>" . strrev($strings) . "</i></b> <hr>";
    echo"Если два слово записать наоборот не меняя порядок слов <br>";

    $strings = "beautiful car";
    $break_up = explode(" ", $strings);
    $str ="";
    for ($i = 0; $i < count($break_up); $i++) {
        $str .= strrev($break_up[$i])." ";
    }

    echo "Слово <b><i> $strings </i></b> наоборот <b><i>" . $str . "</i></b>";


