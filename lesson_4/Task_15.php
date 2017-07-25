<!DOCTYPE>
<html>
    <head>
        <title/>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Table_1</title>
        <style>
            body {
                font-family : Georgia, 'Times New Roman', Times, serif;
                font-size : 20px;
                text-align : center;
                margin : 0 auto;
                padding : 0;
                width : 1000px;
            }

            header {
                height : 100px;
                border : 1px solid black;
            }

            .logo {
                background : #A55;
                float : left;
                margin : 5px;
                padding : 25px;
                width : 200px;  
            }

            .menu_site_header {
                position : static;
                height : 100px;
                float : none;
                margin-top : -16px;
                padding : 0;
                margin-left : 260px;
            }

            .menu_site_header ul {
                list-style : none;
                font-size : 12pt;
                color : #000;
                padding : 0;
                text-transform : uppercase;
                overflow : hidden;
            }

            .menu_site_header ul li {
                float : left;
                padding : 5px;
               
            }

            .menu_site_header ul a,.menu_site_header ul a:before {
                display : block;
                margin : 0;
                padding : 5px 18px;
                margin-top: 12px;
                background : #900;
                color : #fff;
                text-transform : none;
                line-height : 50px;
                
                position : relative;
                transition : all 0.3s case-in-out;
            }

            .product_categories, .content {
                height : 2040px;
                margin-top : -300px;
                margin : 0 auto;
                padding : 0;
                border : 1px solid black;
            }

            .product_categories {
                width : 250px;
                float : left;
            }

            .inner li {
                list-style : none;
            }

            .product_name li a {
                white-space : nowrap;
                width : 100px;
            }

            .inner ul {
                list-style : none;
                padding : 0;
                margin : auto;
            }
            
            .product_item {
                float : left;
                padding : 12px;
                margin : 12px;
            }

            .image {
                background : #AAA;
                height : 175px;
                width : 200px;
            }

            p {
                margin:0;
                padding:0;
            }

            .product_name,
            .price { 
                text-align : center;
                font-size: 10pt; 
                margin: 0 auto;
            }
            .product_name {
                word-wrap: break-word;
                width:180px;
            }

            .stock { 
                text-align : right;
                font-size: 10pt;
            }
            .content {
                float : none;
                width:747px;
                margin-left: 251px;
            }
            footer {
                height : 50px;
                text-align : center;
                font-size: 16px;
                border : 1px solid black;
            }
        </style>
    </head>
    <body>
        <div id = "wrapper">
            <div class = "page">
                <header>
                    <div class = "logo">
                        <img src = "" alt = "Logo"/>
                    </div>
                    <nav class = "menu_site_header">
                        <ul class="b-menu">
                            <? include("menu.php"); ?>
                            <? if ($menu): ?>
                                <? foreach ($menu as $item): ?>
                                    <? if ($item -> visible): ?>
                                        <? if ($item -> menu_id == 1): ?>
                                            <li class="menu_item">
                                                <a href="<? echo $item -> url ?>" class="menu_link"><? echo $item -> name ?></a>
                                            </li>
                                        <? endif; ?>
                                    <? endif; ?>
                                <? endforeach; ?>
                            <? endif; ?>
                        </ul>
                    </nav>
                </header>
                <aside class="product_categories">
                     <ul>
                        <li>sidebar</li>
                        <li>Левый блок</li>
                        <li>обычно категории товаров</li>
                    </ul>
                </aside>
                <? include("products.php"); ?>
                <div class="content">
                    <div class="inner">
                        <p>Контент</p>
                        <p>Тут будет вывод товаров</p>

                        <? if($products) :?>
                            <ul class="clearfix">
                            <? $i = 0; ?>
                                <? foreach ($products as $product) :?>
                                    <? if($product->visible):?>
                                        <li class="product_item">
                                            <div class="image"></div>
                                            <div class="product_name">                                   
                                                <a href="<? echo $product->url ?>">
                                                    <? echo $product->name ?>
                                                </a>
                                            </div> 
                                            <div class="price">
                                                Цена товара = <? echo $product->variants[0]->price ?>
                                            </div>
                                            <div class="stock">
                                                Колличесво товаров - <? echo $product->variants[0]->stock ?> шт 
                                            </div>    
                                        </li>
                                    <? endif; ?>

                                    <? $i++; ?>
                                    <? if (!($i % 3)) :?>
                                        <br>
                                    <? endif; ?>
                                <? endforeach; ?>
                            </ul>
                        <? endif; ?>
                    </div>
                </div>
                <footer>
                    <p>Футер (подвал) сайта</p>    
                </footer>
            </div>
        </div>
    </body>
</html>