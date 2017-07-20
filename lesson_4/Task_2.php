<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Table_1</title>
        <style>
            body {
                font-family : Georgia, 'Times New Roman', Times, serif;
                text-align : center;
                margin : 10px;
            }

            table {
                border: 2px solid white;
                border-collapse: collapse;
                margin : auto;
                width : 300px;
            }
            
            td, th {
                border: 1px solid #666;
                padding : 0;
                text-align : center;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <header>
                <h3>
                    Cоздать массив из 1000 чисел каждый элемент которого равен квадрату своего номера.<br> Результат вывести в виде таблицы (офорить ее рамкой)
                </h3>
            </header>
            
            <table>
                <caption>TABLE 1</caption>
                <tr>
                    <th>
                        <?php echo "array index"; ?>
                    </th>
                    <th>
                        <?php echo "Element of the array"; ?>
                    </th>
                </tr>

                <?php $arr = array(); ?>
                <?php for ($i = 0; $i < 1000; $i++) : ?>
                    <tr>
                        <td>
                            <?php echo $i; ?>
                        </td>
                        <td>
                            <?php $arr[$i] = pow($i, 2); ?>
                            <?php print_r($arr[$i]); ?>
                        </td>
                    </tr>
                <?php endfor;?>
            </table>
        </div>
    </body>
</html>