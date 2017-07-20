<!DOCTYPE>
<html>
    <head>
        <title/>
        <meta charset="utf-8"/>
        <title>Table_1</title>
    </head>
    <body>
        <table border="1">
            <caption>TABLE 1</caption>
            <tr>
                <th>Выражение</th>
                <th>gettype()</th>
                <th>empty()</th>
                <th>isset()</th>
                <th>Boolean <br> if($x)</th>
            </tr>
            <tr>
                <td> $x = "";</td>
                <td><?php $x = "";    echo gettype($x); ?></td>
                <td><?php $x = "";    echo (boolean)empty($x); ?></td>
                <td><?php $x = "";    echo (boolean)isset($x); ?></td>
                <td><?php $x = "";    echo (boolean)$x; ?></td>
            </tr>
            <tr>
                <td> $x = null;</td>
                <td><?php $x = null;    echo gettype($x); ?></td>
                <td><?php $x = null;    echo (boolean)empty($x); ?></td>
                <td><?php $x = null;    echo (boolean)isset($x); ?></td>
                <td><?php $x = null;    echo (boolean)$x; ?></td>
            </tr>
            <tr>
                <td> $y неопределена</td>
                <td><?php echo gettype($y); ?></td>
                <td><?php echo (boolean)empty($y); ?></td>
                <td><?php echo (boolean)isset($y); ?></td>
                <td><?php echo (boolean)$y; ?></td>
            </tr>
            <tr>
                <td>$x = array();</td>
                <td><?php $x = array();    echo gettype($x); ?></td>
                <td><?php $x = array();    echo (boolean)empty($x); ?></td>
                <td><?php $x = array();    echo (boolean)isset($x); ?></td>
                <td><?php $x = array();    echo (boolean)$x; ?></td>
            </tr>
            <tr>
                <td>$x = false;</td>
                <td><?php $x = false;    echo gettype($x); ?></td>
                <td><?php $x = false;    echo (boolean)empty($x); ?></td>
                <td><?php $x = false;    echo (boolean)isset($x); ?></td>
                <td><?php $x = false;    echo (boolean)$x; ?></td>
            </tr>
            <tr>
                <td>$x = true;</td>
                <td><?php $x = true;    echo gettype($x); ?></td>
                <td><?php $x = true;    echo (boolean)empty($x); ?></td>
                <td><?php $x = true;    echo (boolean)isset($x); ?></td>
                <td><?php $x = true;    echo (boolean)$x; ?></td>
            </tr>
            <tr>
                <td>$x = 1;</td>
                <td><?php $x = 1;    echo gettype($x); ?></td>
                <td><?php $x = 1;    echo (boolean)empty($x); ?></td>
                <td><?php $x = 1;    echo (boolean)isset($x); ?></td>
                <td><?php $x = 1;    echo (boolean)$x; ?></td>
            </tr>
            <tr>
                <td>$x = 42;</td>
                <td><?php $x = 42;    echo gettype($x); ?></td>
                <td><?php $x = 42;    echo (boolean)empty($x); ?></td>
                <td><?php $x = 42;    echo (boolean)isset($x); ?></td>
                <td><?php $x = 42;    echo (boolean)$x; ?></td>
            </tr>
            <tr>
                <td>$x = 0;</td>
                <td><?php $x = 0;    echo gettype($x); ?></td>
                <td><?php $x = 0;    echo (boolean)empty($x); ?></td>
                <td><?php $x = 0;    echo (boolean)isset($x); ?></td>
                <td><?php $x = 0;    echo (boolean)$x; ?></td>
            </tr>
            <tr>
                <td>$x = -1;</td>
                <td><?php $x = -1;    echo gettype($x); ?></td>
                <td><?php $x = -1;    echo (boolean)empty($x); ?></td>
                <td><?php $x = -1;    echo (boolean)isset($x); ?></td>
                <td><?php $x = -1;    echo (boolean)$x; ?></td>
            </tr>
            <tr>
                <td>$x = "1";</td>
                <td><?php $x = "1";    echo gettype($x); ?></td>
                <td><?php $x = "1";    echo (boolean)empty($x); ?></td>
                <td><?php $x = "1";    echo (boolean)isset($x); ?></td>
                <td><?php $x = "1";    echo (boolean)$x; ?></td>
            </tr>
            <tr>
                <td>$x = "0";</td>
                <td><?php $x = "0";    echo gettype($x); ?></td>
                <td><?php $x = "0";    echo (boolean)empty($x); ?></td>
                <td><?php $x = "0";    echo (boolean)isset($x); ?></td>
                <td><?php $x = "0";    echo (boolean)$x; ?></td>
            </tr>
            <tr>
                <td>$x = "-1";</td>
                <td><?php $x = "-1";    echo gettype($x); ?></td>
                <td><?php $x = "-1";    echo (boolean)empty($x); ?></td>
                <td><?php $x = "-1";    echo (boolean)isset($x); ?></td>
                <td><?php $x = "-1";    echo (boolean)$x; ?></td>
            </tr>
            <tr>
                <td>$x = "php";</td>
                <td><?php $x = "php";    echo gettype($x); ?></td>
                <td><?php $x = "php";    echo (boolean)empty($x); ?></td>
                <td><?php $x = "php";    echo (boolean)isset($x); ?></td>
                <td><?php $x = "php";    echo (boolean)$x; ?></td>
            </tr>
            <tr>
                <td>$x = "true";</td>
                <td><?php $x = "true";    echo gettype($x); ?></td>
                <td><?php $x = "true";    echo (boolean)empty($x); ?></td>
                <td><?php $x = "true";    echo (boolean)isset($x); ?></td>
                <td><?php $x = "true";    echo (boolean)$x; ?></td>
            </tr>
            <tr>
                <td>$x = "false";</td>
                <td><?php $x = "false";    echo gettype($x); ?></td>
                <td><?php $x = "false";    echo (boolean)empty($x); ?></td>
                <td><?php $x = "false";    echo (boolean)isset($x); ?></td>
                <td><?php $x = "false";    echo (boolean)$x; ?></td>
            </tr>
        </table>
        
        <p>Примечание:</p>
        <p>1 - TRUE</p>
        <p>0 - FALSE</p>
    </body>
</html>