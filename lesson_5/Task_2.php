<!DOCTYPE html>
<html>
<head>
    <title>menu</title>

    <style type="text/css">
        .menuCSS {
            margin : 0;
            padding : 0;
            list-style : none;
        }
        .menuCSS.vertical {
            margin-left: 150px;
        }

        .menuCSS li {
            width: 150px;
        }
        .menuCSS.vertical li {
            display: inline-block;
            margin-left: 50px;
        }
        .menuCSS.horizontal li {
            display: block;
            margin-top: 10px;
        }

        .menuCSS li a {
            display: block;
            padding: 5px;
            text-align: center;
            text-decoration: none;
            /*color: #0b0;
            background-color: #25d;*/
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .menuCSS li a:hover {
            /*color: #b00;
            background-color: #d52;*/
            color: #000;
            background-color: #5bc0de;
            border-color: #46b8da;
            font-weight: bold;
        }
    </style>

</head>
<body>
<?php
    function mainMenu($menu, $type=true)
    {
        $html = '';
        $menuClass = $type ? 'vertical' : 'horizontal';

        if ($menu) {
            $html .= '<ul class="menuCSS ' . $menuClass .'">';
            
            foreach ($menu as $key => $value) { 
                $html .= '<li><a href="' . $value . '">';
                $html .= $key . '</a></li>';
            }

            $html .= '</ul>';
        }

        echo $html;
    }

    $menu = array(
        'home'=>'#1',
        'news'=>'#2',
        'projects'=>'#3',
        'education'=>'#4',
        'contacts'=>'#5'
    );

    mainMenu($menu);
    mainMenu($menu, false);
?>
</body>
</html>